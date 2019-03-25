package models

import "fmt"

type PersonDuplicateError struct {
	Message string
}

func (e *PersonDuplicateError) Error() string {
	return fmt.Sprintf("Persona %s duplicada", e.Message)
}

type ObjectDuplicateError struct {
	Message string
}

func (e *ObjectDuplicateError) Error() string {
	return fmt.Sprintf("Objeto %s duplicado en la base de datos", e.Message)
}
