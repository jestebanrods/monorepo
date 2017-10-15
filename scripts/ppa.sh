#!/bin/sh

sudo apt-add-repository ppa:git-core/ppa -y
sudo apt-add-repository ppa:webupd8team/java -y
sudo apt-add-repository ppa:longsleep/golang-backports -y
sudo apt-add-repository ppa:ondrej/php -y
sudo apt-add-repository ppa:ansible/ansible -y
sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main' -y
sudo apt-add-repository ppa:danielrichter2007/grub-customizer -y

sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys BBEBDCB318AD50EC6865090613B00F1FD2C19886

echo "deb [ arch=amd64,arm64 ] http://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list
echo deb http://repository.spotify.com stable non-free | sudo tee /etc/apt/sources.list.d/spotify.list

