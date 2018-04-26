#!/bin/bash

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo apt-key fingerprint 0EBFCD88

sudo apt-add-repository -y \
    ppa:git-core/ppa \
    ppa:webupd8team/java \
    ppa:longsleep/golang-backports \
    ppa:ondrej/php \
    ppa:ansible/ansible \
    ppa:plushuang-tw/uget-stable

sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu xenial stable"
