package main

import (
	"fmt"
)

/*
	Tipos de datos
	Básicos: Números, Cadenas, Booleanos
	Conjuntos/Set: Arrays, Estructuras(Struct)
	Referencia:Punteros, Segmentos(Slice), Mapa(Map), Funciones, Canales
	Interfaces
*/

func main() {
	enteros()
}

func enteros() {
	/*
		int8 -128 a 127
		int16 -32768 a 32767
		int32 -2147483648 a 2147483647
		int64

		uint8 0 a 255
		uint16 0 a 65535
		uint32 0 a 4294967296
		uint64

		byte alias de uint8
		rune alias de int32

		Dependiendo de la arquitectura 64 o 32 bits
		uint, int equivalente a int32,uint32 o int64,uint64
	*/

	var number1 int32
	var number2 int16

	number1 = 345
	number2 = 8

	//No se pueden realizar operaciones de tipos diferentes
	fmt.Println(int16(number1) + number2) //Casting
}
