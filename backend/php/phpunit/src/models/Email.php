<?php

namespace jestebanrs\models;

class Email
{
    private $email;

    private function __construct($email)
    {
        $this->isValidEmail($email);
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public static function autoInstance($email)
    {
        return new self($email);
    }

    private function isValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Is not a valid email address');
        }
    }
}
