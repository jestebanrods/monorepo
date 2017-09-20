<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leer Cookie</title>
    </head>    
    <body>
    	<?php
			if(isset($_COOKIE["Prueba"])) {
				echo $_COOKIE["Prueba"];
			} else {
				echo "No Cookie";
			}
		?>
    </body>
</html>