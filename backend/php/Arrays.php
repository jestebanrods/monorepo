<?php
	//Array Indexado
	$semana[0]="Lunes";
	$semana[1]="Martes";
	$semana[2]="Jueves";
	echo $semana[1] . "<br>";
	$dias=array("Jueves","Viernes","Sabado","Domingo");
	echo $dias[2] . "<br>";
	sort($semana); //Ordenar Array Alfabeticamente
	for($i=0;$i<count($semana);$i++) {
		echo $semana[$i] . "<br>";
	}
	$semana[]="Dìas";
	//Array Asociativo
	$datos=array("Nombre"=>"Juan", "Apellido"=>"Rodríguez", "Edad"=>23);
	echo $datos["Edad"] . "<br>";
	echo is_array($datos)? "Es Un Array<br>":"No Es Un Array<br>";
	foreach($datos as $clave=>$valor) {
		echo "$clave: $valor<br>";
	}
	$datos["Pais"]="Colombia";
?>