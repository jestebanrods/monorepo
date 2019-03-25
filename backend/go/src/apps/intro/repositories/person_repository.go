package repositories

import (
	"apps/intro/models"
	"fmt"
)

type PersonRepository struct {
}

func (r *PersonRepository) Save(p *models.Person) {
	fmt.Println("Save")
}

func (r *PersonRepository) FindById(id string) *models.Person {
	fmt.Println("Id " + id)
	return &models.Person{Name: "Jossie"}
}
