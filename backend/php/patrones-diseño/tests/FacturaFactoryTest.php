<?php

use jestebanrs\Factory\FacturaFactory;
use jestebanrs\Factory\FacturaIVA;
use jestebanrs\Factory\FacturaIVAReducida;
use PHPUnit\Framework\TestCase;

class FacturaFactoryTest extends TestCase
{
    public function test_it_should_be_able_to_construct()
    {
        $facturaIVA = FacturaFactory::getFactura('iva', 25000);
        $facturaReducida = FacturaFactory::getFactura('reducida', 10000);
        $this->assertInstanceOf(FacturaIVA::class, $facturaIVA);
        $this->assertInstanceOf(FacturaIVAReducida::class, $facturaReducida);
    }

    public function test_it_should_fail_when_type_parameters_is_incorrect()
    {
        $this->expectException(InvalidArgumentException::class);
        $facturaIVA = FacturaFactory::getFactura('error', 25000);
    }

    public function test_it_should_be_able_to_calculate_iva()
    {
        $facturaIVA = FacturaFactory::getFactura('iva', 25000)->getPrecioIVA();
        $this->assertEquals(4750, $facturaIVA);
    }

    public function test_it_should_be_able_to_calculate_reduced_iva()
    {
        $facturaIVA = FacturaFactory::getFactura('reducida', 25000)->getPrecioIVA();
        $this->assertEquals(2000, $facturaIVA);
    }
}