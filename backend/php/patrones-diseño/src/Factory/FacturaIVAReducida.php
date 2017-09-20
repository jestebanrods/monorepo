<?php

namespace jestebanrs\Factory;

class FacturaIVAReducida extends Factura
{
    /**
     * @return float
     */
    public function getPrecioIVA(): float
    {
        return $this->precio * 0.08;
    }
}