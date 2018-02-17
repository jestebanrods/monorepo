#!/bin/bash

#Borrar todos los contenedores
docker rm -f $(docker ps -a -q)

#Construir la imagen del builder
docker build -f Dockerfile.builder -t jestebanrods/go-builder .

#Crear el contenedor que compilara
docker run -di --name go-builder jestebanrods/go-builder sh

#Copiar el archivo compilado
docker container cp go-builder:/go/src/main ./bin/main

#Crear la imagen del proyecto
docker build -f Dockerfile -t jestebanrods/go-server .

#Ejecutar la aplicación
docker run -d -p 80:8000 --name go-server jestebanrods/go-server
