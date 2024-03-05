import sys
import argparse
from pathlib import Path


file = Path(__file__).resolve()
parent, root = file.parent, file.parents[1]
print(parent, root)
sys.path.append(str(root))
try:
    sys.path.remove(str(parent))
except ValueError:
    pass

from service_generator.generator import RpcServiceGenerator


parser = argparse.ArgumentParser(description='Generate services by proto files')
parser.add_argument('templates_path')
parser.add_argument('proto_path')
parser.add_argument('dest_path')
parser.add_argument('service_name_tpl')
args = parser.parse_args()
generator = RpcServiceGenerator(args.templates_path, args.service_name_tpl)
generator.run(
	args.proto_path,
	args.dest_path,
)