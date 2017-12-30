#!/bin/bash

declare -a array=(
    'ubuntu:16.04'
    'alpine:3.5'
    'mongo:3.4'
    'mariadb:10.2'
    'php:7.1.12-fpm-alpine'
    'golang:1.9.2-alpine')

for item in ${array[@]}
do 
    docker pull $item;
done
