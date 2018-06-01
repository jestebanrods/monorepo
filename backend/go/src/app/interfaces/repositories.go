package interfaces

import (
	"app/models"
)

type Logger interface {
	Log(message string)
}

type PersonRepositoryInterface interface {
	Save(p *models.Person)
	FindById(id string) *models.Person
}
