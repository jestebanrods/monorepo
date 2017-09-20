<?php
	include("conexion.php");
	$id=$_GET["id"];
	$conexion->query("DELETE FROM datos_usuarios WHERE id='$id'");
	header("location:index.php");
?>