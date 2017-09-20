<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Variables</title>
    </head>
    <body>
    	<?php
			function incrementaVariable() {
				static $Contador=0;
				$Contador++;
				echo $Contador . "<br/>";
			}
			incrementaVariable();
			incrementaVariable();
		?>
    </body>
</html>