<?php
	require("ConfiguracionConexionBBDD.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
	
	//Protección Contra Inyecciones SQL
	$busqueda=mysqli_real_escape_string($conexion, $_GET["buscar"]);	
		
	if(mysqli_connect_errno()) {
		echo "Fallo Conexión Base Datos";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
	mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT * FROM $db_tabla WHERE Componentes LIKE '%$busqueda%'";
	$resultado=mysqli_query($conexion, $consulta);
	
	while($filas=mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
		echo "<table><tr><td>";
		echo $filas["Cantidad"] . "</td><td>";
		echo $filas["Componentes"] . "</td><td>";
		echo $filas["Encapsulado"] . "</td></tr></table>";
		echo "<br>";
	}
	
	mysqli_close($conexion);
?>