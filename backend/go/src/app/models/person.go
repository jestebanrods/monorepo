package models

import "fmt"

type Person struct {
	Name string
}

func (p *Person) Resume() {
	fmt.Printf("Soy %s\n", p.Name)
}
