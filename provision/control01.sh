#!/bin/bash
ORIGEN='/vagrant/provision/'
export DEBIAN_FRONTEND=noninteractive

# Actualizacion e instalacion
apt-get update
apt-get -y install vim adduser


#Agregando endpoints al /etc/hosts
sudo echo "10.0.0.210 server">./temp_hosts
sudo echo "10.0.0.211 datos">>./temp_hosts
cat /etc/hosts |tail -n +1 >>./temp_hosts
cat ./temp_hosts > /etc/hosts
rm ./temp_hosts


#Configurar puerto SSH
sudo sed -i 's/^Port .*/Port 4000/g' /etc/ssh/sshd_config


# Crear Usuario
sudo adduser --home /home/respaldo --disabled-password respaldo
sudo usermod -aG sudo respaldo