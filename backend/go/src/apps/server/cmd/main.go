package main

import (
	"log"
	"net/http"
)

func main() {
	http.HandleFunc("/", handler)
	err := http.ListenAndServe(":8080", nil)
	if err != nil {
		log.Fatal(err)
	}

	log.Println("Server On 8080")
}

func handler(w http.ResponseWriter, r *http.Request) {
	w.Write([]byte("Hola Mundo"))
}
