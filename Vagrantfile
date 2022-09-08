# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "ubuntu/focal64"

  config.vm.define "clientserver" do |clientserver|
    clientserver.vm.hostname = "clientserver"

    clientserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

    clientserver.vm.network "private_network", ip: "192.168.56.11"

    clientserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    clientserver.vm.provision "shell", path: "build-clientserver-vm.sh"
  end

  config.vm.define "landlordserver" do |landlordserver|
    landlordserver.vm.hostname = "landlordserver"

    landlordserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"

    landlordserver.vm.network "private_network", ip: "192.168.56.12"

    landlordserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    
    landlordserver.vm.provision "shell", path: "build-landlordserver-vm.sh"
  end

  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"

    dbserver.vm.network "private_network", ip: "192.168.56.13"
    
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
  end

end
