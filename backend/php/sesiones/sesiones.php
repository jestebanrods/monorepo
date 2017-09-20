<?php 
	// La diferencia entre sesiones y cookies, es que la sesiones duran lo que el navegador
	// dure abierto, luego de cerrado se destruye. Al cerrar la página se conservan, al cerrar el
	// navegador se borra. Ademas la sesiones se almacenan en el servidor, las cookies en el cliente.
	
	// Creación de sesión
	session_start();
	$_SESSION['saludo']="Hola";
	// Adquirir sesión
	if(isset($_SESSION['saludo'])) {
		$recibido = $_SESSION['saludo'];
		echo $recibido;
	}
?>
