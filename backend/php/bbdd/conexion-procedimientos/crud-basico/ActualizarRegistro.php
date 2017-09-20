<?php
	require("ConfiguracionConexionBBDD.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
	
	//Protección Contra Inyecciones SQL
	$id=$_GET["id"];
	$componente=mysqli_real_escape_string($conexion,$_GET["componente"]);
	$cantidad=$_GET["cantidad"];
	$encapsulado=mysqli_real_escape_string($conexion,$_GET["encapsulado"]);
	$tipo=mysqli_real_escape_string($conexion,$_GET["tipo"]);
	
	if(mysqli_connect_errno()) {
		echo "Fallo Conexión Base Datos";
		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
	mysqli_set_charset($conexion, "utf8");

	$consulta="UPDATE $db_tabla SET Componentes='$componente',Cantidad=$cantidad,
				Encapsulado='$encapsulado',Tipo='$tipo' WHERE ID=$id";
	$resultado=mysqli_query($conexion, $consulta);

	if(!$resultado) {
		echo "Error Consulta";
	}else {
		echo "Registro Guardado";
	}
	mysqli_close($conexion);
?>