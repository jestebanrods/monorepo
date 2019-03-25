package main

import (
	"fmt"
)

func main() {
	//Iniciación
	fmt.Println("Hola Mundo")

	//Declaración de variables
	var number int
	number = 15
	fmt.Printf("Número: %d\n", number)
	number = 40
	fmt.Printf("Nueva Asignación: %d\n", number)

	//Declaración de multiples variables
	var (
		university string
		program    string
		city       = "Bucaramanga"
	)
	university = "UIS"
	program = "Ingeniería Electrónica"
	fmt.Println(university, program, city)

	//Declaración de variables automáticas
	//Duck Tiping
	name := "Jossie Esteban"
	fmt.Printf("Nombre: %s\n", name)

	//Asignación multiple
	name, number = "Rodríguez", 24
	fmt.Println("Apellido:", name)

	//Declaración + Asignación multiple automática
	lastname, age := "Rodríguez Salazar", 24
	fmt.Println("Apellidos:", lastname)
	fmt.Println("Edad:", age)
}
