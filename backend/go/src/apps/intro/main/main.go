package main

import (
	"apps/intro/models"
	"fmt"
)

func main() {
	goku := models.NewSaiyajin("Goku", 1000, nil)
	goku.Super()
	goku.Person.Resume()
	fmt.Println(goku.Name, goku.Power)

	gohan := models.NewSaiyajin("Gohan", 500, goku)
	gohan.Resume()
}
