#!/bin/bash

declare -a array=(
    'ubuntu:16.04'
    'alpine:3.7'
    'mongo:3.6'
    'mariadb:10.2'
    'php:7.1.12-alpine'
    'golang:1.9.2-alpine'
    'postgres:9.6-alpine',
    'consul:1.0.6'
    'gliderlabs/registrator')

for item in ${array[@]}
do 
    docker pull $item;
done
