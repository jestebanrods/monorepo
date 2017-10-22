#!/bin/sh

sudo ansible-playbook -i hosts.cfg playbook.$1.yml

