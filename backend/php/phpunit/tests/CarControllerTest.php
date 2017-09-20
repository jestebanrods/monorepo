<?php

use jestebanrs\controllers\CarController;
use jestebanrs\models\Gearbox;
use jestebanrs\models\Electronics;
use jestebanrs\models\Engine;
use jestebanrs\models\Ligth;
use PHPUnit\Framework\TestCase;

class TestCarController extends TestCase
{

    function test_it_can_get_ready_the_car()
    {
        $carController = new CarController();
        $gearbox = new Gearbox();
        $engine = new Engine();

        $mockElectronics = $this->createMock(Electronics::class);
        $mockLights = $this->getMockBuilder(Ligth::class)->getMock();

        $this->assertTrue(
            $carController->getReadyToGo(
                $engine, $gearbox, $mockElectronics, $mockLights)
        );
    }

    function test_if_electronics_model_return_anything()
    {
        $electronics = $this->createMock(Electronics::class);
        $electronics->method('turnOnOff')->willReturn('on');

        $this->assertEquals('on', $electronics->turnOnOff(true));
    }

    function test_engine_stub()
    {
        $stub = $this->createMock(Engine::class);
        $stub->expects($this->once())
            ->method('start')
            ->will($this->returnValue('engine on'));

        $carController = new CarController();
        $start = $carController->startCar($stub->start());
        $this->assertTrue($start);
    }

    function test_failed_engine_stub()
    {
        $this->expectException(\InvalidArgumentException::class);

        $stub = $this->createMock(Engine::class);
        $stub->expects($this->any())
            ->method('start')
            ->will($this->returnValue('anything'));

        $carController = new CarController();
        $start = $carController->startCar($stub->start());

        $this->assertTrue($start);
    }

}
