<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BBDD</title>
        <style>
        	table {
            	width:50%;
				border:1px dotted #FF0004;
				margin:auto;
            }
        </style>
    </head>    
    <body>
    	<?php
			require("ConfiguracionConexionBBDD.php");
			//Conexión Por Procedimientos
			$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
			if(mysqli_connect_errno()) {
				echo "Fallo Conexión Base Datos";
				exit();
			}
			mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
			mysqli_set_charset($conexion, "utf8");
			$consulta="SELECT * FROM $db_tabla"; //Toda BBDD Sin Filtro
			$consulta2="SELECT * FROM $db_tabla WHERE Cantidad=1"; //Toda BBDD Filtro Cantidad 1
			$resultado=mysqli_query($conexion, $consulta2);
			while($filas=mysqli_fetch_row($resultado)) {
				echo "<table><tr><td>";
				echo $filas[0] . "</td><td>";
				echo $filas[1] . "</td><td>";
				echo $filas[2] . "</td><td>";
				echo $filas[3] . "</td><td>";
				echo $filas[4] . "</td><td>";
				echo $filas[5] . "</td></tr></table>";
				echo "<br>";
			}
			mysqli_close($conexion);
		?>
    </body>
</html>