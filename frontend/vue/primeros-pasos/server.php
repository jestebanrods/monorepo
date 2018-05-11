<?php

header("Access-Control-Allow-Origin: *");

$formData = [];

foreach ($_POST as $key => $value) {
    $formData[$key] = $value;
    $$key = $value;
}

echo $formType === "true" ? 
    'OK Form "A" <br> Datos registrados correctamente' : 
    'OK Form "B" <br> Datos registrados correctamente';
