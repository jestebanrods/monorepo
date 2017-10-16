<?php

abstract class Persona
{
	protected $name;

	public function setName(string $name) {
		$this->name = $name;
	}
	
	public function getName(): string {
		return $this->name;
	}
	
	abstract function sayHello(): string;
}

