<?php
	header("Access-Control-Allow-Origin: *");
	$valNombre = isset($_POST["nombre"]) && !empty($_POST["nombre"]);
	$valApellido = isset($_POST["apellido"]) && !empty($_POST["apellido"]);

	if($valNombre && $valApellido) {
		$datos = array();
		$nombre = htmlspecialchars($_POST["nombre"]);
		$apellido = htmlspecialchars($_POST["apellido"]);
		$fecha = getdate();

		$datos["nombre"] = $nombre;
		$datos["apellido"] = $apellido;
		$datos["fecha"] = $fecha;

		echo json_encode($datos);
	}
?>
