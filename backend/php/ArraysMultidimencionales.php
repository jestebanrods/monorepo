<?php
	//Array Multiple Asociativo
	$alimentos=array("Fruta"=>array("Tropical"=>"Kiwi", "Citrico"=>"Mandariana"),
					 "Leche"=>array("Animal"=>"Vaca", "Vegetal"=>"Coco"),
					 "Carne"=>array("Vacuno"=>"Lomo","Porcino"=>"Pata")
					 );
	echo $alimentos["Carne"]["Vacuno"] . "<br><br>";
	foreach($alimentos as $clave_alim=>$alim) {
		echo "$clave_alim: <br>";
		while(list($clave,$valor)=each($alim)) {
			echo "$clave= $valor<br>";
		}
		echo "<br>";
	}
	//Simplificado
	echo var_dump($alimentos);
?>