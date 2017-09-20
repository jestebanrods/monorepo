<?php
	require("ConfiguracionConexionBBDD.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
	
	if(mysqli_connect_errno()) {
		echo "Fallo Conexión Base Datos";
		exit();
	}

	$id=$_GET["id"];
	$componente=$_GET["componente"];
	$cantidad=$_GET["cantidad"];
	$encapsulado=$_GET["encapsulado"];
	$tipo=$_GET["tipo"];

	mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
	mysqli_set_charset($conexion, "utf8");

	$consulta="INSERT INTO $db_tabla (ID,Componentes,Cantidad,Encapsulado,Tipo)
						 values ($id,'$componente',$cantidad,'$encapsulado','$tipo')";
	$resultado=mysqli_query($conexion, $consulta);

	if(!$resultado) {
		echo "Error Consulta";
	}else {
		echo "Registro Guardado";
	}
	mysqli_close($conexion);
?>
