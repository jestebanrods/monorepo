FROM alpine

MAINTAINER Jossie Esteban Rodríguez Salazar

WORKDIR /home/src/

COPY main ./

RUN apk update && \
apk add curl

CMD ["/bin/sh", "-c", "./main"]

