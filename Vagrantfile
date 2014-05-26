VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = "/Users/accept/Desktop/фильмы/trusty-server-cloudimg-amd64-vagrant-disk1.box"
    config.vm.provision :shell, :path => "VagrantBootstrap.sh"
    config.vm.network :forwarded_port, guest: 80, host: 4567
    config.vm.network :forwarded_port, guest: 8000, host: 8000
    config.vm.network :forwarded_port, guest: 1233, host: 1234
end
