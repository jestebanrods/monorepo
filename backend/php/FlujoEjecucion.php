<!doctype html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>Tercera Página PHP</title>
    </head>
    <body>
    	<?php
			include ("FuncionesExternas.php");
			require ("PrimerosPasos.php");
		?>
    	<?php
			function dameDatos() {
				echo "Mensaje Función<br/>";
			}
		?>
    	<?php
			echo "Primer Mensaje<br/>";
			dameDatos();
			echo "Segundo Mensaje<br/>";
			dameDatos();
			dameDatos();
			Saludo();
		?>
    </body>
</html>