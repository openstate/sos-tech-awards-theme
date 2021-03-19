from fabric import Connection, Config, task
from invoke import Exit
import getpass

# Name of the git repository
GIT_REPO = 'sos-tech-awards-theme'

# Path of the directory
DIR = '/home/projects/wordpress/wp-content/themes/%s' % (GIT_REPO)

# Container used to compile the assets
NODE_CONTAINER = 'sos-tech-awards-theme_node_1'

# Server name
SERVER = 'Oxygen'


@task
def deploy(c):
    sudo_pass = getpass.getpass("Enter your sudo password on %s: " % SERVER)
    config = Config(overrides={'sudo': {'password': sudo_pass}})
    c = Connection(SERVER, config=config)

    c.sudo(
        'bash -c "cd %s && git pull git@github.com:openstate/%s.git"' % (
            DIR,
            GIT_REPO
        )
    )
    output = c.sudo(
        'docker inspect --format="{{.State.Status}}" %s' % (NODE_CONTAINER)
    )
    if output.stdout.strip() != 'running':
        raise Exit(
            '\n*** ERROR: The %s container, used to compile the assets, is '
            'not running. Please build/run/start the container.' % (
                NODE_CONTAINER
            )
        )
    c.sudo('docker exec %s yarn build:production' % (NODE_CONTAINER))
