#!/bin/bash

declare -a array=(
    'ubuntu:16.04'
    'alpine:3.5'
    'mongo:3.4'
    'mariadb:10.2'
    'php:7.1.12-alpine'
    'golang:1.9.2-alpine'
    'dpage/pgadmin4'
    'postgres:10.1-alpine')

for item in ${array[@]}
do 
    docker pull $item;
done
