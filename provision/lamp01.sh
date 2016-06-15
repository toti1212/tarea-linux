#!/bin/bash
ORIGEN='/vagrant/provision/'
export DEBIAN_FRONTEND=noninteractive

# Actualizacion e instalacion
apt-get update
apt-get -y install vim 
apt-get -y install apache2 libapache2-mod-php5 php5 php5-mysql php5-gd mysql-client
#Agregando endpoints al /etc/hosts
sudo echo "10.0.0.211 datos">./temp_hosts
sudo echo "10.0.0.212 control">>./temp_hosts
cat /etc/hosts |tail -n +1 >>./temp_hosts
cat ./temp_hosts > /etc/hosts
rm ./temp_hosts


#Configurar puerto SSH
sudo sed -i 's/^Port .*/Port 4000/g' /etc/ssh/sshd_config

# Archivos base "a fuego"
cp $ORIGEN/bashrc /etc/skel/.bashrc
cp $ORIGEN/bashrc /home/vagrant/.bashrc
cp $ORIGEN/bashrc-root /root/.bashrc
cp $ORIGEN/vimrc /etc/vim/vimrc

sudo rm -R /var/www/html
sudo ln -s /vagrant/wordpress /var/www/html
sudo systemctl restart apache2

pwd
cd /home
cat /vagrant/provision/id_rsa.pub >> /home/vagrant/.ssh/authorized_keys








