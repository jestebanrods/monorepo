#!/bin/bash
# Crea Certificado Firmado CA

DEST="./"

if [ ! -z "$1" ]; then
  DEST=$1
fi

NAME="dev"
PASS="1234"

# Creamos Llave Privada
openssl genrsa -out $DEST/$NAME.key 2048

# Creamos CSR (Certificate Signing Request)
openssl req -key $DEST/$NAME.key -new -out $DEST/$NAME.csr -config config.csr.cnf

# Creamos CRT Servidor Web
openssl x509 -req -in $DEST/$NAME.csr -CA ../ca/ca.pem -CAkey ../ca/ca.key -passin pass:$PASS -CAcreateserial -out $DEST/$NAME-cert.pem -days 3650 -extfile config.crt.cnf

