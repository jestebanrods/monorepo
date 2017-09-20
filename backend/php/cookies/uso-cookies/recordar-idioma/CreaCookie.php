<?php
	setcookie("Idioma",$_GET["idioma"], time()+30); //1 Mes 86400
	header("location:SeleccionadorPaginaCookie.php");
?>