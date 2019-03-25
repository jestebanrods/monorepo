#!/bin/bash

env CGO_ENABLED=0 GOOS=linux go build -installsuffix cgo -o bin/main cmd/main.go

docker image build . -t "jestebarods/server:dev"
docker run -d -p 8080:8080 --name "server-test" jestebarods/server:dev
