<?php

namespace jestebanrs\Models;

class PersonaRepository implements PersonaRepositoryInterface
{
    public function save(Persona $person)
    {

    }

    public function findById(string $id): Persona
    {
        return new Persona();
    }
}
