<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Funciones Matematicas & Casting</title>
    </head>
    <body>
    	<?php
			$num1=rand(0, 100);
			$num2=23.675;
			$num3="10";
			$num3+=3;
			$num3*=2.35;
			$resultado=(int)$num1; // Casting Explicito
			echo "Número Aleatorio: $num1<br/>";
			$num2=round($num2,2);
			echo "Redondeo: $num2<br/>";
			echo "Suma Casting Implicito: $num3";
			
		?>
    </body>
</html>