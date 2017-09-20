<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Conexión BBDD POO</title>
    </head>
    <body>
    	<?php
			$db_host="localhost";
			$db_usuario="root";
			$db_contrasena="";
			$db_nombre="usuarios";
			$db_tabla="electronics_components";
			
			$conexion = new mysqli($db_host,$db_usuario,$db_contrasena,$db_nombre);
			
			if($conexion->connect_errno) {
				echo "Error Conexión BBDD" . $conexion->connect_errno;
			}
			
			$conexion->set_charset("utf8");
			$sql="SELECT * FROM $db_tabla";
			$resultado=$conexion->query($sql);
			
			if($conexion->errno) {
				echo "Error Consulta";
				die($conexion->error);
			}
			
			while($filas=$resultado->fetch_assoc()) {
				echo "<table><tr><td>";
				echo $filas["Cantidad"] . "</td><td>";
				echo $filas["Componentes"] . "</td><td>";
				echo $filas["Encapsulado"] . "</td></tr></table>";
				echo "<br>";
			}
			
			$conexion->close();
		?>
    </body>
</html>