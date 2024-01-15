require 'yaml'
require 'fileutils'

config = {
    local: './vagrant/config/vagrant-local.yml',
    example: './vagrant/config/vagrant-local.example.yml'
}

# copy config from example if local config not exists
FileUtils.cp config[:example], config[:local] unless File.exist?(config[:local])
# read config
options = YAML.load_file config[:local]

# check github token
if options['github_token'].nil? || options['github_token'].to_s.length != 40
    puts "You must place REAL GitHub token into configuration:\n/vagrant/config/vagrant-local.yml"
    exit
end

Vagrant.configure("2") do |config|
    config.vm.box = options['base_box']

    # should we ask about box updates?
    config.vm.box_check_update = options['box_check_update']

    config.vm.network "private_network", ip: options['ip']

    if options['public_network']
      config.vm.network 'public_network', ip: options['public_ip']
    end

    config.vm.synced_folder ".", "/app"

    config.vm.provider "virtualbox" do |vb|
        vb.cpus = options['cpus']
        vb.memory = options['memory']
        vb.name = options['machine_name']
        vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    end

    config.vm.provision "shell", path: "./vagrant/provision/provision.sh", args: [
        "http://#{options['ip']}:#{options['port_public']}",
        "#{options['ip_host']}",
        "#{options['timezone']}"
    ], run: "always"

    # post-install message (vagrant console)
    config.vm.post_up_message = "ROOT URL: http://#{options['ip']}:#{options['port_public']}\nMAIL URL: http://#{options['ip']}:#{options['port_database']}"
end
