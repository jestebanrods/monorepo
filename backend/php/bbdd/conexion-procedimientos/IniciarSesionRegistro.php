<?php
	require("ConfiguracionConexionBBDD.php");
	$db_tabla="datos_personales";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
	
	//Protección Contra Inyecciones SQL
	$usuario=mysqli_real_escape_string($conexion, $_POST["usuario"]);
	$contrasena=mysqli_real_escape_string($conexion, $_POST["contrasena"]);
		
	if(mysqli_connect_errno()) {
		echo "Fallo Conexión Base Datos";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
	mysqli_set_charset($conexion, "utf8");
	
	$consulta="SELECT * FROM $db_tabla WHERE (usuario='$usuario' AND contraseña='$contrasena')";
	$resultado=mysqli_query($conexion, $consulta);
	
	if(mysqli_affected_rows($conexion)>0) {
		echo "Conexión Exitosa";
		//Redireccionar A Otra Página
		header('Location: FormularioConsultarRegistro.php');
	}else {
		echo "Error En La Conexión";
		header('Location: FormularioInicioSesion.php');
	}
	
	mysqli_close($conexion);
?>