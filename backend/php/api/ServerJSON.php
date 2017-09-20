<?php

$json = json_decode(file_get_contents('asignados.json'), true);
$send=[];

foreach ($json as $var) {
    $c1 = true;
    $c2 =true;
    $c3 = true;
    $c4 = true;
    $c5 = true;
    if(!empty($_GET['freq'])){
        $c1 = $var['data']['frecuencia']==$_GET['freq'];
    }
    if(!empty($_GET['movil'])){
        $c2 = $var['data']['movil']==$_GET['movil'];
    }
    if(!empty($_GET['phone'])){
        $c3 = $var['data']['cliente']['telefono']==$_GET['phone'];
    }
    if(!empty($_GET['dateInit'])){
        $c4= $var['data']['timestamp']>=strtotime($_GET['dateInit']);
    }
    if(!empty($_GET['dateEnd'])){
        $c5= $var['data']['timestamp']<=strtotime($_GET['dateEnd']);
    }
    ($c1 && $c2 && $c3 && $c4 && $c5)?$send[]=$var:null;
}

if(!empty($_GET['quantity'])){
    while(count($send)>$_GET['quantity']){
        array_pop($send);
    }
}

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($send);

/**
$uri=$_SERVER['REQUEST_URI'];

$data=explode('/', $uri);
$json = json_decode(file_get_contents('asignados.json'), true);
$send=[];

switch($data[1]){
case 'movil':
    foreach($json as $item) if($item['data']['movil']==$data[2]) $send[]=$item;
    break;
case 'freq':
    foreach($json as $item) if($item['data']['frecuencia']==$data[2]) $send[]=$item;
    break;
case 'phone':
    foreach($json as $item) if($item['data']['cliente']['telefono']==$data[2]) $send[]=$item;
    break;
case '':
    $send=$json;
    break;
}

switch($data[3]){
case 'cantidad':
    while(count($send)>$data[4]) array_pop($send);
    break;
}


header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
if(empty($send)){
http_response_code(204);
}else{
echo json_encode($send);
}

 * Open Server 
 * php -S localhost:8000 server-json.php
 * http://localhost:4200/?quantity=2&freq=6&movil=1090&phone=&dateInit=&dateEnd=
**/
