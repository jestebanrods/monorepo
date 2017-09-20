<?php

$id = $_GET["id"];
require_once "../Modelo/Modificacion_Usuarios.php";

$usuario = new UsuariosModelo();
$usuario->deleteUsuario($id);
header("location:../index.php");

?>