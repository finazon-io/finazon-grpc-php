PATH_THIS:=$(realpath $(dir $(lastword ${MAKEFILE_LIST})))
PATH_DIST:=${PATH_THIS}/src
PATH_PROTO:=proto/finazon

PHP=/usr/bin/php
PYTHON=/usr/bin/python3
PROTOC=/usr/bin/protoc
GRPC_PHP_PLUGIN=/usr/bin/grpc_php_plugin
COMPOSER=/usr/local/bin/composer

GENERATOR_PATH=${PATH_THIS}/tools/service_generator
GENERATOR_VIRTUAL_ENV:=${GENERATOR_PATH}/.venv
GENERATOR_TEMPLATES_PATH := ${GENERATOR_PATH}/templates
GENERATOR_PROTO_PATH := ${PATH_PROTO}
GENERATOR_DEST_PATH := ${PATH_DIST}/Finazon/Grpc/Service
GENERATOR_CMD := ${GENERATOR_PATH}/main.py ${GENERATOR_TEMPLATES_PATH} ${GENERATOR_PROTO_PATH} ${GENERATOR_DEST_PATH} '{name_camel}Service.php'

.PHONY: install
install:
	@echo "Install requirements ..."
	@sudo apt install -y protobuf-compiler
	@${COMPOSER} install

.PHONY: patch_proto
patch_proto:
	@echo "Patch proto files ..."
	# add php_namespace to proto files
	@for filename in ${PATH_PROTO}/*.proto; do \
  		grep -qF 'php_namespace' $$filename || sed -i '/package finazon;/a option php_namespace = "Finazon\\\\Grpc\\\\Api";\noption php_metadata_namespace = "Finazon\\\\Grpc\\\\GPBMetadata";' $$filename ; \
   	done
   	
.PHONY: generate_proto
generate_proto:
	@echo "Generate proto ..."
	${PROTOC} --proto_path=${PATH_PROTO} \
	  --php_out=${PATH_DIST} \
	  --grpc_out=${PATH_DIST} \
	  --plugin=protoc-gen-grpc=${GRPC_PHP_PLUGIN} \
	  ${PATH_PROTO}/*.proto
	  
.PHONY: generate_services
generate_services:
	@echo "Generate services ..."
	@${PYTHON} -m venv ${GENERATOR_VIRTUAL_ENV}
	@${GENERATOR_VIRTUAL_ENV}/bin/pip3 install -Ur ${GENERATOR_PATH}/requirements.txt
	@${GENERATOR_VIRTUAL_ENV}/bin/python3 ${GENERATOR_CMD}

.PHONY: generate
generate:
	# @todo: return type hint Item[] instead of \Google\Protobuf\Internal\RepeatedField https://github.com/protocolbuffers/protobuf/issues/6145
	make install
	make patch_proto
	make generate_proto
	make generate_services

.PHONY: bump_version
bump_version:
	@echo $VERION > VERSION

.PHONY: build
build:
	make generate

.PHONY: publish
publish:
	make build
