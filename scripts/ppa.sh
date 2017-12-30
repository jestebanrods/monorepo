#!/bin/bash

sudo apt-add-repository ppa:git-core/ppa -y
sudo apt-add-repository ppa:webupd8team/java -y
sudo apt-add-repository ppa:longsleep/golang-backports -y
sudo apt-add-repository ppa:ondrej/php -y
sudo apt-add-repository ppa:ansible/ansible -y

sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
echo "deb [ arch=amd64,arm64 ] http://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list
