require 'yaml'
require 'fileutils'

config = {
    local: './vagrant/config/vagrant-local.yml',
    example: './vagrant/config/vagrant-local.example.yml'
}

domains = {
  frontend: 'www.test.pintukeluar.id',
  backend: 'admin.test.pintukeluar.id',
  api: 'api.test.pintukeluar.id'
}

# copy config from example if local config not exists
FileUtils.cp config[:example], config[:local] unless File.exist?(config[:local])
# read config
options = YAML.load_file config[:local]

Vagrant.configure("2") do |config|
    config.vm.box = options['base_box']

    # should we ask about box updates?
    config.vm.box_check_update = options['box_check_update']

    config.vm.provider "virtualbox" do |vb|
        vb.cpus = options['cpus']
        vb.memory = options['memory']
        vb.name = options['machine_name']
        vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    end

    config.vm.network "private_network", ip: options['ip']

    config.vm.synced_folder ".", "/app"

    config.vm.synced_folder '.', '/vagrant', disabled: true

    # machine name (for vagrant console)
    config.vm.define options['machine_name']

    # machine name (for guest machine console)
    config.vm.hostname = options['machine_name']

    # hosts settings (host machine)
    config.vm.provision :hostmanager
    config.hostmanager.enabled            = true
    config.hostmanager.manage_host        = true
    config.hostmanager.ignore_private_ip  = false
    config.hostmanager.include_offline    = true
    config.hostmanager.aliases            = domains.values

    config.vm.provision "shell", path: "./vagrant/provision/once-as-root.sh", args: ["#{options['timezone']}", "#{options['databasename']}", "#{domains[:frontend]}", "#{domains[:backend]}", "#{domains[:api]}"]
    config.vm.provision 'shell', path: './vagrant/provision/once-as-vagrant.sh', privileged: false
    config.vm.provision 'shell', path: './vagrant/provision/always-as-root.sh', run: 'always'

    # post-install message (vagrant console)
    config.vm.post_up_message = domains.to_s
end
