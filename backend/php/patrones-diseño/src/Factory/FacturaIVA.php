<?php

namespace jestebanrs\Factory;

class FacturaIVA extends Factura
{
    /**
     * @return float
     */
    public function getPrecioIVA(): float
    {
        return ($this->precio * 0.19);
    }
}