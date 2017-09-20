<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BBDD</title>
        <style>
        	table {
            	width:25%;
				border:1px dotted #FF0004;
				margin:auto;
				text-align:center;
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
			//Buscar Toda BBDD Sin Filtro
			$consulta="SELECT * FROM $db_tabla";
			//Buscar Toda BBDD Filtro Contenga 2 En Cantidad
			$consulta2="SELECT * FROM $db_tabla WHERE Cantidad=2";
			//Buscar Toda BBDD Filtro Contenga Palabra INA En Componentes
			$consulta3="SELECT * FROM $db_tabla WHERE Componentes LIKE '%INA%'";
			//Buscar Toda BBDD Filtro Contenga Palabra INA115_U En Componentes
			$consulta4="SELECT * FROM $db_tabla WHERE Componentes LIKE 'INA115_U'";
			$resultado=mysqli_query($conexion, $consulta4);
			while($filas=mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
				echo "<table><tr><td>";
				echo $filas["Cantidad"] . "</td><td>";
				echo $filas["Componentes"] . "</td><td>";
				echo $filas["Encapsulado"] . "</td></tr></table>";
				echo "<br>";
			}
			mysqli_close($conexion);
		?>
    </body>
</html>