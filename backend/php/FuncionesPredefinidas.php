<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones Predefinidas</title>
    </head>    
    <body>
    	<?php
			$palabra1="JOSSIE";
			$palabra2="Jossie";
			echo (strtolower($palabra1)) . "<br/>"; //Combierte Minúsculas
			echo (strtoupper($palabra2)) . "<br/>"; //Combierte Mayúsculas
			function suma($num1,$num2) {
				$resultado=$num1+$num2;
				return $resultado;
			}
			echo "La Suma Es: " . suma(2,4);
		?>
    </body>
</html>