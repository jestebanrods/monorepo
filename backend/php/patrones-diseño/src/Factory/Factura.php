<?php

namespace jestebanrs\Factory;

class Factura
{
    /**
     * @var int
     */
    protected $precio;

    /**
     * Factura constructor.
     * @param int $precio
     */
    public function __construct(int $precio)
    {
        $this->precio = $precio;
    }
}