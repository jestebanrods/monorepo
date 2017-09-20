<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$conexion = new MongoDB\Client();
$ldb = $conexion->listDatabases();

//$db = $m->selectDatabase('testing');
$db = $conexion->testing;

//$taxistas = $db->selectCollection('taxistas');
$taxistas = $db->taxistas;

$cantidad = $taxistas->count();
$busquedas = $taxistas->find(['nombre' => new MongoDB\BSON\Regex('Pedro$', 'i')])->toArray();
//$busquedas = $taxistas->find(['nombre' => new MongoDB\BSON\Regex('^Pedro')])->toArray();
//$busquedas = $taxistas->find(['nombre' => 'Marcelo Pedro'])->toArray();

echo "Registros: $cantidad \n";

foreach ($busquedas as $busqueda) {
    echo $busqueda->nombre . "\n";
}