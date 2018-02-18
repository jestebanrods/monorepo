#!/bin/bash

docker rm -f $(docker ps -a -q)
docker build -t jestebanrods/go-server .
docker run -d -p 80:8000 --name app jestebanrods/go-server
