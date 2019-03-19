#!/bin/bash

# Generar Llave Privada - Clave: 1234
openssl genrsa -des3 -out rootCA.key 2048

# Generar Llave Pública
openssl req -x509 -new -nodes -key rootCA.key -days 3560 -out rootCA.pem -config config.csr.cnf
