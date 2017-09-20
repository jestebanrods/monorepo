<?php
	try {
		$conexion=new PDO("mysql:host=localhost;dbname=usuarios","root","");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET UTF8");
		//echo "Conexión Exitosa";
	}catch (Exception $e) {
		echo "<br>Línea Error: " . $e->getLine() . "<br>";
		die("Error: " . $e->getMessage()) . "<br>";
	}
?>