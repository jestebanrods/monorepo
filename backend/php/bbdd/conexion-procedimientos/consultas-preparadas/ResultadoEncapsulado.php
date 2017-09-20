<?php
	$encapsulado=$_GET["encapsulado"];

	$db_host="localhost";
	$db_usuario="root";
	$db_contrasena="";
	$db_nombre="usuarios";
	$db_tabla="electronics_components";

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
	if(mysqli_connect_errno()) {
		echo "Error De Conexión Con La BBDD";
		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("BBDD No Encontrada");
	mysqli_set_charset($conexion, "utf8");

	$sql="SELECT Componentes, Tipo, Cantidad FROM $db_tabla WHERE Encapsulado= ?";
	$stmt=mysqli_prepare($conexion,$sql);
	mysqli_stmt_bind_param($stmt, "s",$encapsulado);
	$consulta=mysqli_stmt_execute($stmt);
	if(!$consulta) {
		echo "Error Ejecución Consulta";
	}else {
		mysqli_stmt_bind_result($stmt, $componentes, $tipo, $cantidad);
		echo "Articulos Encontrados: <br><br>";
		while(mysqli_stmt_fetch($stmt)) {
			echo "$componentes $tipo $cantidad <br>";
		}
	}
	mysqli_stmt_close($stmt);
?>