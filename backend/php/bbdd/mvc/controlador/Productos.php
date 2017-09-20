<?php

require_once "Modelo/Consultar_Productos.php";

$producto = new ProductosModelo();
$matrizProductos = $producto->getProductos();

require_once "Vista/Visor_Productos.php";

?>