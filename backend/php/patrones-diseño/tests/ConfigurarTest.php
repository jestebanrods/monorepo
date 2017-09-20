<?php

use jestebanrs\Singleton\Configurar;
use PHPUnit\Framework\TestCase;

class ConfigurarTest extends TestCase
{
    public function test_it_should_be_able_to_construct()
    {
        $config = Configurar::getInstancia();
        $this->assertInstanceOf(Configurar::class, $config);
    }

    public function test_it_should_be_create_a_same_instance()
    {
        $config = Configurar::getInstancia();
        $config2 = Configurar::getInstancia();
        $this->assertContainsOnlyInstancesOf(Configurar::class, array($config, $config2));
        $this->assertSame($config, $config2);
    }

    public function test_it_should_be_show_ddbb()
    {
        $config = Configurar::getInstancia();
        $this->assertEquals('Conectado a MongoDB', $config->setConexion('MongoDB'));
    }
}