<?php
	$db_host="localhost";
	$db_usuario="root";
	$db_contrasena="";
	$db_nombre="usuarios";
	$db_tabla="electronics_components";
	
	$id=$_GET["id"];
	$compo=$_GET["compo"];
	$can=$_GET["can"];
	$enca=$_GET["enca"];
	$tipo=$_GET["tipo"];
	
	try {
		$conexion=new PDO("mysql:host=$db_host; dbname=$db_nombre","$db_usuario","$db_contrasena");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
		echo "Conexión Exitosa<br><br>";
						
		$sql="INSERT INTO $db_tabla (ID,Componentes,Cantidad,Encapsulado,Tipo) 
			VALUES (:id,:compo,:can,:enca,:tipo)";
		$resultado=$conexion->prepare($sql);
		
		$resultado->execute(array(":id"=>$id,":compo"=>$compo,":can"=>$can,":enca"=>$enca,":tipo"=>$tipo));
		
		echo "Registro Insertado Con Exito";
		
		$resultado->closeCursor();		
	} catch (Exception $e){
		die ("Error: " . $e->getLine());
	} finally {
		$conexion=NULL;
	}
?>