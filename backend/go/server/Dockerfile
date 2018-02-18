FROM golang:1.9.2-alpine as compiler
RUN mkdir -p /go/src
WORKDIR /go/src
COPY src .
ENV CGO_ENABLED 0
ENV GOOS linux
ENV GOARCH amd64
RUN go build main.go

FROM scratch
WORKDIR /bin
COPY --from=compiler /go/src/main .
EXPOSE 8000
CMD ["main"]
