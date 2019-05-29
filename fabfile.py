from fabric.api import run, env, cd, sudo

env.use_ssh_config = True
env.hosts = ["Oxygen"]

# Container used to compile the assets
NODE_CONTAINER = 'accountabilityhacktheme2019_node_1'

def deploy():
    with cd('/home/projects/wordpress-new/wp-content/themes/accountability-hack-theme-2019'):
        sudo('git pull git@github.com:openstate/accountability-hack-theme-2019.git')
        output = sudo('docker inspect --format="{{.State.Status}}" %s' % (NODE_CONTAINER))
        if output != 'running':
            exit('\n*** ERROR: The %s container, used to compile the assets, is not running. Please build/run/start the container.' % (NODE_CONTAINER))
        sudo('docker exec %s yarn build:production' % (NODE_CONTAINER))
