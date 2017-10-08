#!/bin/sh

sudo ansible-playbook -i hosts.cfg playbook.ppa.yml
sudo ansible-playbook -i hosts.cfg playbook.languajes.yml
sudo ansible-playbook -i hosts.cfg playbook.docker.yml
sudo ansible-playbook -i hosts.cfg playbook.software.yml
