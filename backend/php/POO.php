<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Objeto Carro</title>
    </head>    
    <body>
    	<?php
			class Carro{
				protected $ruedas;
				protected $color;
				private static $descuento=0;
				function getRuedas() {
					return $this->ruedas;
				}
				function Carro() {
					$this->ruedas=4;
					$this->color="";
				}
				function arrancar() {
					echo "Arrancar<br/>";
				}
				function girar() {
					echo "Girar<br/>";	
				}
				function setColor($colorCarro,$nombreCarro) {
					$this->color=$colorCarro;
					echo "El Color De $nombreCarro Es: " . $this->color . "<br/>";
				}
				static function aplicarDescuento() {
					if(date("m-d-y")>"05-01-2016"){
						self::$descuento=4500;
						echo "Descuento Aplicado";
					}
				}
			}
			$renault=new Carro();
			$mazda=new Carro();
			$mazda->arrancar();
			echo $mazda->getRuedas() . "<br/>";
			$renault->setColor("Verde", "Reanult");
			Carro::aplicarDescuento();
		?>
    </body>
</html>