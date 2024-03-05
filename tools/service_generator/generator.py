import typing
from pathlib import Path

from jinja2 import Environment, FileSystemLoader

from service_generator.proto_parser import RpcProtoParser


service_template_file = 'service_template.jinja'


class RpcServiceGenerator:

    def __init__(
            self, templates_path: str, service_file_tpl: typing.Optional[str] = None
    ):
        self.service_name_tpl = service_file_tpl
        templates_path = Path(templates_path)
        if not templates_path:
            raise Exception(f'Template path {templates_path} is not exists')
        self.tpl_env = Environment(loader=FileSystemLoader(templates_path))

    def run(self, proto_path: str, dest_path: str):
       self.generate_services(proto_path, dest_path)

    def generate_services(self, proto_path: str, dest_path: str):
        dest_path = Path(dest_path)
        if not dest_path.exists():
            raise Exception(f'Dest path {dest_path} is not exists')
        parser = RpcProtoParser(proto_path)
        result = parser.run()
        if len(result) == 0:
            raise Exception(f'Empty result after parsing {proto_path}')
        template = self.tpl_env.get_template(service_template_file)
        for file_desc in result:
            service = file_desc.get_service()
            code = template.render(service=service, file=file_desc)
            service_file_path = dest_path.joinpath(
            	self.service_name_tpl.format(name_camel=file_desc.get_name_camel(), name_snake=file_desc.get_name_snake())
            )
            with service_file_path.open('w') as f:
                f.write(code)
