#!/bin/bash
# Certificate Authority (CA)

DEST="./"
NAME="ca"

# Generar Llave Privada - Clave: 1234
openssl genrsa -des3 -out $DEST/$NAME.key 2048

# Generar Llave Pública
openssl req -x509 -new -nodes -key $DEST/$NAME.key -days 3560 -out $DEST/$NAME.pem -config config.csr.cnf
