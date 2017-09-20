<?php
	$id=$_GET["id"];
	$componente=$_GET["componente"];
	$cantidad=$_GET["cantidad"];
	$encapsulado=$_GET["encapsulado"];
	$tipo=$_GET["tipo"];

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

	$sql="INSERT INTO $db_tabla (ID, Componentes, Cantidad, Encapsulado, Tipo) VALUES (?,?,?,?,?)";
	$stmt=mysqli_prepare($conexion,$sql);
	mysqli_stmt_bind_param($stmt, "isiss",$id,$componente,$cantidad,$encapsulado,$tipo);
	$consulta=mysqli_stmt_execute($stmt);

	if(!$consulta) {
		echo "Error Ejecución Consulta";
	}else {
		echo "Agregado Nuevo Componente";
	}
	
	mysqli_stmt_close($stmt);
?>