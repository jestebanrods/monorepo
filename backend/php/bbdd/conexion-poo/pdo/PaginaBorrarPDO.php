<?php
	$db_host="localhost";
	$db_usuario="root";
	$db_contrasena="";
	$db_nombre="usuarios";
	$db_tabla="electronics_components";
	
	$busqueda=$_GET["busqueda"];
	
	try {
		$conexion=new PDO("mysql:host=$db_host; dbname=$db_nombre","$db_usuario","$db_contrasena");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
		echo "Conexión Exitosa<br><br>";
						
		$sql="DELETE FROM $db_tabla WHERE ID=:busqueda";
		$resultado=$conexion->prepare($sql);
		
		$resultado->execute(array(":busqueda"=>$busqueda));
		
		echo "Registro Eliminado Exito";
		
		$resultado->closeCursor();		
	} catch (Exception $e){
		die ("Error: " . $e->getLine());
	} finally {
		$conexion=NULL;
	}
?>