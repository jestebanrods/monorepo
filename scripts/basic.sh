#!/bin/bash

sudo apt-get install -y \
    git \
    openssh-server  \
    software-properties-common \
    cowsay \
    python-pip \
    lib32stdc++6

sudo pip install setuptools
sudo pip install wheel
sudo pip install ansible
