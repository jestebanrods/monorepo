<?php
	if(isset($_POST["button"])) {
		$numero1=$_POST["num1"];
		$numero2=$_POST["num2"];
		$operacion=$_POST["operacion"];
		calcular($operacion);	
	}
	function calcular($calculo) {
		global $numero1,$numero2;
		if(!strcmp("Suma",$calculo)) {
			echo "El Resultado Es: " . ($numero1+$numero2);
		}elseif(!strcmp("Resta",$calculo)) {
			echo "El Resultado Es: " . ($numero1-$numero2);
		}elseif(!strcmp("Multiplicación",$calculo)) {
			echo "El Resultado Es: " . ($numero1*$numero2);
		}elseif(!strcmp("División",$calculo)) {
			echo "El Resultado Es: " . ($numero1/$numero2);
		}else {
			echo "El Resultado Es: " . ($numero1%$numero2);
		}	
	}	
    
?>