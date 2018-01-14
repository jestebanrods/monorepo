<?php
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	echo "Servidor Responde: $nombre, $apellido<br>";
	if ($nombre == "Jos") {
		$i=5;
	}else{
		$i=10;
	}
	for ($i; $i>=0 ; $i--) { 
		echo "$i ";
	}
?>