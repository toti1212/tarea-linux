#-*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

    if Vagrant.has_plugin?("vagrant-cachier")
        config.cache.scope = :box
    end

    config.vm.define "server", primary: true do |server|
        server.vm.box ="debian-8.1-lxc"
        server.vm.hostname = "server"
        server.vm.network "private_network", ip: "10.0.0.210"
        server.vm.network "forwarded_port", guest:80, host:8080
        server.vm.provision "shell", path: "provision/lamp01.sh"
        server.vm.provider"virtualbox" do |vbox|
            vbox.memory = 512
            vbox.cpus = 1
        end
    end

     config.vm.define "datos", primary: true do |datos|
        datos.vm.box ="debian-8.1-lxc"
        datos.vm.hostname = "datos"
        datos.vm.network "private_network", ip: "10.0.0.211"
        #datos.vm.network "forwarded_port", guest:80, host:3306
        datos.vm.provision "shell", path: "provision/datos01.sh"
        datos.vm.provider"virtualbox" do |vbox|
            vbox.memory = 256
            vbox.cpus = 1
        end
    end

    config.vm.define "control" do |control|
        control.vm.box ="debian-8.1-lxc"
        control.vm.hostname = "control"
        control.vm.network "private_network", ip: "10.0.0.212"
        #control.vm.network "forwarded_port", guest:8080, host:8888
        #control.vm.network "forwarded_port", guest:8443, host:8843
        control.vm.provision "shell", path: "provision/control01.sh"
        control.vm.provider"virtualbox" do |vbox|
            #vbox.gui = true
            vbox.memory = 128
            vbox.cpus = 1
        end
    end

end

