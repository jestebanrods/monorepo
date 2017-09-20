<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variables</title>
    </head>
    <body>
    	<?php
			$Nombre="Jossie";
			function showName() {
				global $Nombre;
				$Nombre="María";
			}
			showName();
			echo $Nombre;
		?>
    </body>
</html>