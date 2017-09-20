<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Parametros Referencia</title>
    </head>
    <body>
    	<?php
			function incrementa(&$valor) {
				$valor++;
				return $valor;
			}
			$numero=5;
			echo incrementa($numero) . "<br/>";
			echo $numero;
		?>
    </body>
</html>