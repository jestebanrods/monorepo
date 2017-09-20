<?php
require_once "Conectar.php";
$conexion = Conectar::Conexion();

$cantidad_registros = 3;

if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("location:index.php");
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
}

$desde = ($pagina - 1) * $cantidad_registros;

$sql_total = "SELECT * FROM datos_usuarios";
$resultado = $conexion->prepare($sql_total);
$resultado->execute(array());

$num_filas = $resultado->rowCount();
$total_paginas = ceil($num_filas / $cantidad_registros);

?>