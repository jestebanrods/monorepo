<?php

namespace jestebanrs\controllers;

class CarController {

    protected $engine;
    protected $gearbox;
    protected $electronics;
    protected $lights;

    function __construct() {
        
    }

    function getReadyToGo($engine, $gearbox, $electronics, $lights) {
        $this->engine = $engine;
        $this->gearbox = $gearbox;
        $this->electronics = $electronics;
        $this->lights = $lights;
        return true;
    }

    function startCar($star) {
        if ($star == 'engine on') {
            return true;
        } else {
            throw new \InvalidArgumentException('The car is off');
        }
    }

}
