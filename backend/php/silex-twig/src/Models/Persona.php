<?php

namespace jestebanrs\Models;

/**
 * Class Persona
 *
 * @package jestebanrs\Models
 * @author Jossie Esteban Rodríguez Salazar
 */
class Persona
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $age;

    /**
     * @var
     */
    private $phone;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
