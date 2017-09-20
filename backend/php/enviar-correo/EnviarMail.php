<?php
	$texto_mail=$_POST["comnetarios"];
	$destinatario=$_POST["email"];
	$asunto=$_POST["asunto"];
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=utf-8\r\n";
	$headers.="From: Prueba Jossie < pruebas@electrokits.epizy.com >\r\n";
	$exito=mail($destinatario, $asunto, $texto_mail, $headers);
	if($exito) {
		echo "Correo Enviado Con Exito";
	}else {
		echo "Correo No Enviado";
	}
?>