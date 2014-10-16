# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.define "itamae-target" do |web|
    web.vm.provider :virtualbox do |vb|
      vb.name = "itamae_target"
    end
    web.vm.hostname = "itamae-target"
    web.vm.box = "chef/centos-6.5"
    web.vm.network :private_network, ip: "192.168.33.99"
    web.vm.synced_folder "./www/", "/var/www/html"

    config.vm.provision :itamae do |config|
      config.recipes = ['./recipe.rb']
    end
  end
end