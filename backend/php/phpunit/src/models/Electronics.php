<?php

namespace jestebanrs\models;

class Electronics
{

    protected $turnOn;

    function __construct()
    {

    }

    function turnOnOFF($state)
    {
        return $state ? $this->turnOn = 'on' : $this->turnOn = 'off';
    }

}
