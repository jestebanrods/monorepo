FROM golang:1.9.2-alpine

LABEL manteiner "Jossie Esteban Rodríguez Salazar"
LABEL email "jestebanrods@gmail.com"

RUN mkdir -p /go/src/
WORKDIR /go/src/

COPY main.go ./

ENV CGO_ENABLED=0
ENV GOOS=linux

RUN go build main.go
