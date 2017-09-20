<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertar Registros</title>
	</head>
	<body>
		<?php			
			require("ConfiguracionConexionBBDD.php");
			$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
			if(mysqli_connect_errno()) {
				echo "Fallo Conexión Base Datos";
				exit();
			}
			mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
			mysqli_set_charset($conexion, "utf8");
			$consulta="INSERT INTO $db_tabla (Componentes, Cantidad, Encapsulado) values ('PIC18F84A',4,'DIP-16')";		
			$resultado=mysqli_query($conexion, $consulta);
			mysqli_close($conexion);
    	?>
	</body>
</html>