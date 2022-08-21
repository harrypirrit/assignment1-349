Vagrant.configure("2") do |config|
config.vm.box = "ubuntu/xenial64"


    # Currency Web Server
    config.vm.define "adminserver" do |adminserver|
      adminserver.vm.hostname = "adminserver-tz"
      adminserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
      adminserver.vm.network "private_network", ip: "192.168.2.11"
      adminserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
      adminserver.vm.provision "shell", inline: <<-SHELL
         apt-get update
              apt-get install -y apache2 php libapache2-mod-php php-mysql
              cp /vagrant/test-website.conf /etc/apache2/sites-available/
              a2ensite test-website    
              a2dissite 000-default
              service apache2 reload
          SHELL
    end
    # Database Server
    config.vm.define "databaseserver" do |databaseserver|
        databaseserver.vm.hostname = "databaseserver"
    
    databaseserver.vm.network "private_network", ip: "192.168.2.12"
    databaseserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    dbserver.vm.provision "shell", inline: <<-SHELL
      apt-get update
      export MYSQL_PWD='root1234'
      echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
      echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
      apt-get -y install mysql-server
      echo "CREATE DATABASE currencies;" | mysql
      echo "CREATE USER 'user'@'%' IDENTIFIED BY 'root1234';" | mysql
      echo "GRANT ALL PRIVILEGES ON timezones.* TO 'webuser'@'%'" | mysql
      export MYSQL_PWD='root1234'

    SHELL
  end




end
