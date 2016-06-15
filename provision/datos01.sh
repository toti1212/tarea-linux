#!/bin/bash
ORIGEN='/vagrant/provision/'
export DEBIAN_FRONTEND=noninteractive

# Actualizacion e instalacion
apt-get update
apt-get -y install vim 
apt-get -y install mysql-server

#Configurar puerto SSH
sudo sed -i 's/^Port .*/Port 4000/g' /etc/ssh/sshd_config

#Agregando endpoints al /etc/hosts
grep -F "10.0.0.210" || sudo echo "10.0.0.210 server">./temp_hosts
grep -F "10.0.0.212" || sudo echo "10.0.0.212 control">>./temp_hosts
cat /etc/hosts |tail -n +1 >>./temp_hosts
cat ./temp_hosts > /etc/hosts
rm ./temp_hosts

# Instalción de MySQL

mysqladmin -u root password password
mysql -u root -ppassword -e "CREATE DATABASE IF NOT EXISTS wordpress;"
mysql -u root -ppassword -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'10.0.0.210' IDENTIFIED BY 'password';"
mysql -u root -ppassword -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost' IDENTIFIED BY 'password';"
mysql -u root -ppassword -e "FLUSH PRIVILEGES;"

sudo cp /vagrant/provision/my.cnf /etc/mysql
sudo service mysql restart

cat /vagrant/provision/id_rsa.pub >> /home/vagrant/.ssh/authorized_keys
sudo cp /vagrant/provision/dump.sql /home/vagrant/

mysql -u root -ppassword wordpress < /home/vagrant/dump.sql



