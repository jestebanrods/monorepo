package models

import "fmt"

type Saiyajin struct {
	*Person
	Power  int
	Father *Saiyajin
}

func NewSaiyajin(name string, power int, father *Saiyajin) *Saiyajin {
	return &Saiyajin{
		Person: &Person{
			Name: name,
		},
		Power:  power,
		Father: father,
	}
}

func (s *Saiyajin) Super() {
	s.Power += 10000
}

func (s *Saiyajin) Resume() {
	fmt.Println(s.Name, s.Power, s.Father.Name)
}
