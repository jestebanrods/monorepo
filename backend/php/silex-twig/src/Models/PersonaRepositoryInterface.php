<?php

namespace jestebanrs\Models;

interface PersonaRepositoryInterface
{
    public function save(Persona $person);

    public function findById(string $id): Persona;
}
