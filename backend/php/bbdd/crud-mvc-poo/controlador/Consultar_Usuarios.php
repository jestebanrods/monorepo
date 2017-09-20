<?php

require_once "Modelo/Modificacion_Usuarios.php";

$usuario = new UsuariosModelo();
$matrizUsuarios = $usuario->getUsuarios();

require_once "Vista/Visor_Usuarios.php";

?>