<?php
	$db_host="localhost";
	$db_usuario="root";
	$db_contrasena="";
	$db_nombre="usuarios";
	$db_tabla="electronics_components";
	
	$busqueda=$_GET["buscar"];
	$categoria=$_GET["categoria"];
	
	try {
		$conexion=new PDO("mysql:host=$db_host; dbname=$db_nombre","$db_usuario","$db_contrasena");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");
		echo "Conexión Exitosa<br><br>";
						
		$sql="SELECT (Componentes, Cantidad) FROM ($db_tabla) WHERE $categoria LIKE ?";
		$resultado=$conexion->prepare($sql);
		
		if($categoria=="ID" | $categoria=="Cantidad") {
			$resultado->execute(array("$busqueda"));
		} else{
			$resultado->execute(array("%$busqueda%"));
		}
		
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