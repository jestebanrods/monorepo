<?php
	$db_host="localhost";
	$db_usuario="root";
	$db_contrasena="";
	$db_nombre="usuarios";
	$db_tabla="electronics_components";
	
	$busqueda1=$_GET["buscar1"];
	$busqueda2=$_GET["buscar2"];
	$categoria1=$_GET["categoria1"];
	$categoria2=$_GET["categoria2"];
	
	try {
		$conexion=new PDO("mysql:host=$db_host; dbname=$db_nombre","$db_usuario","$db_contrasena");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
		echo "Conexión Exitosa<br><br>";
						
		$sql="SELECT Componentes, Cantidad FROM $db_tabla WHERE $categoria1= :CAT1 AND $categoria2= :CAT2";
		$resultado=$conexion->prepare($sql);
		
		$resultado->execute(array(":CAT1"=>$busqueda1, ":CAT2"=>$busqueda2));
		
		while ($registros=$resultado->fetch(PDO::FETCH_ASSOC)){
			echo "Componente: " . $registros["Componentes"];
			echo " Cantidad: " . $registros["Cantidad"] . "<br>";
		}
		
		$resultado->closeCursor();		
	} catch (Exception $e){
		die ("Error: " . $e->getMessage());
	} finally {
		$conexion=NULL;
	}
?>