package main

import (
	"log"
	"net/http"
)

func main() {
	http.HandleFunc("/", raiz)
	log.Println("Servidor corriendo en http://localhost:8000")
	http.ListenAndServe(":8000", nil)
}

func raiz(response http.ResponseWriter, request *http.Request) {
	response.Write([]byte("Página Principal"))
}
