<?php

namespace jestebanrs\Factory;

use Prophecy\Exception\InvalidArgumentException;

class FacturaFactory
{
    /**
     * @param string $tipo
     * @param int $precio
     * @return FacturaIVA|FacturaIVAReducida
     */
    public static function getFactura(string $tipo, int $precio)
    {
        if ($tipo === 'iva') {
            return new FacturaIVA($precio);
        } elseif ($tipo === 'reducida') {
            return new FacturaIVAReducida($precio);
        } else {
            throw new InvalidArgumentException('The argument is not valid,  only use iva or reducido');
        }
    }
}