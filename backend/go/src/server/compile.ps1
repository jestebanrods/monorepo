#!/bin/bash

docker rm -f $(docker ps -a -q)

docker run -d -p 8500:8500 --name=consul -e CONSUL_BIND_INTERFACE=eth0 consul:1.0.6
docker run -d --name=registrator --net=host --volume=/var/run/docker.sock:/tmp/docker.sock gliderlabs/registrator consul://localhost:8500

docker build -t jestebanrods/go-server .
docker run -d -p 80:8000 --name=app jestebanrods/go-server
