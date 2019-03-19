#!/bin/bash

# Crea un cerificado firmado por el rootCA.key de pruebas
# Una vez creado moverlo a la carpeta correspondiente y cifrarlo

DEST="./"
NAME="dev"

if [ ! -z "$1" ]; then
  DEST=$1
fi

# Creamos Llave Privada
openssl genrsa -out $DEST/$NAME-key.pem 2048

# Creamos CSR (Certificate Signing Request)
openssl req -key $DEST/$NAME-key.pem -new -out $DEST/$NAME.csr -config config.csr.cnf

# Creamos CRT Servidor Web
openssl x509 -req -in $DEST/$NAME.csr -CA ../CA/rootCA.pem -CAkey ../CA/rootCA.key -passin pass:1234 -CAcreateserial -out $DEST/$NAME-cert.pem -days 3650 -extfile config.crt.cnf
