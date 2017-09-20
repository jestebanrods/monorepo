<?php
	for($i=0;$i<10;$i++) {
		echo "Pruebas $i<br/>";
		if($i==6) {
			echo "Flujo Interrumpido<br/>";
			break;
		}
	}
	for($j=10;$j>=-10;$j--) {
		if($j==0) {
			echo "División Por 0 - Nula<br/>";
			continue;
		}
		echo "9 / $j = " . 9/$j . "<br/>";
	}
	echo "Continuación Código ...";
?>