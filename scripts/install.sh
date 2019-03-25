#!/bin/bash

sudo ansible-playbook -i inventory.cfg 00_local_ssh.yml

ansible-playbook -i inventory.cfg 01_bash.yml
ansible-playbook -i inventory.cfg 02_dependencies.yml
ansible-playbook -i inventory.cfg 10_sysctl.yml
ansible-playbook -i inventory.cfg 11_pip.yml
ansible-playbook -i inventory.cfg 20_consul.yml
ansible-playbook -i inventory.cfg 22_docker.yml
ansible-playbook -i inventory.cfg 30_mongodb.yml
ansible-playbook -i inventory.cfg 50_go.yml
ansible-playbook -i inventory.cfg 52_node.yml
ansible-playbook -i inventory.cfg 53_java.yml
ansible-playbook -i inventory.cfg 54_php.yml

ansible-playbook 51_go_deps.yml
