<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Strings</title>
        <style>
			.resaltar {
				color:#F52225;
				font-weight: bold;
			}
		</style>
    </head>
    <body>
    	<?php
			$Nombre="Jossie";
			echo "<h1 class='resaltar'>Ejemplo Frase</h1>";
			echo "Nombre: $Nombre<br/>";
			$Variable1="CASA";
			$Variable2="CASA";
			$Resultado=strcmp($Variable1, $Variable2); // Exactamente Iguales
			$Resultado2=strcasecmp($Variable1, $Variable2); // Mismas Palabras
			// 0 Si Coinciden
			if(!$Resultado) {
				echo "Coinciden Variables";
			}else {
				echo "No Coinciden Variables";
			}
		?>
    </body>
</html>