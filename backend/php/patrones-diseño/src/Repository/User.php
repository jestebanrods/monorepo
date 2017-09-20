<?php

namespace jestebanrs\Repository;

class User
{
    protected $username;
    protected $dateOfBirth;
    protected $password;
    protected static $id;

    /**
     * User constructor.
     * @param $username
     * @param $dateOfBirth
     * @param $password
     */
    public function __construct($username, $dateOfBirth, $password)
    {
        $this->username = $username;
        $this->dateOfBirth = $dateOfBirth;
        $this->password = $password;
        self::$id += 1;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}
