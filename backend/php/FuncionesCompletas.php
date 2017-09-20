<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejemplo Funciones</title>
    </head>
    <body>
    	<?php
			function fraseMayuscula($frase,$conversion=true) {
				$frase=strtolower($frase);
				if($conversion) {
					$resultado=ucwords($frase);
				}else {
					$resultado=strtoupper($frase);
				}
				return $resultado;
			}
			echo fraseMayuscula("esto es una prueba", false) . "<br/>";
			echo fraseMayuscula("esto es una prueba");
		?>
    </body>
</html>