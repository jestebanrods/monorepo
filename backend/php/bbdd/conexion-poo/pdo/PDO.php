<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PDO</title>
    </head>
    <body>
    	<?php
			$db_host="localhost";
			$db_usuario="root";
			$db_contrasena="";
			$db_nombre="usuarios";
			$db_tabla="electronics_components";
			
			try{
				$conexion = new PDO("mysql:host=$db_host; dbname=$db_nombre", "$db_usuario", "$db_contrasena");
				echo "Conexión OK";
			}catch (Exception $e) {
				die	('Error: ' . $e->getMessage());
			}finally {
				$conexion = null;
			}
		?>
    </body>
</html>