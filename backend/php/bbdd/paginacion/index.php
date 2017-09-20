<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paginación</title>
    </head>
    <body>
    	<?php
			try{
				$conexion=new PDO("mysql:host=localhost;dbname=usuarios","root","");
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$conexion->exec("SET CHARACTER SET UTF8");
				
				$cantidad_registros=10;
				if(isset($_GET["pagina"])) {					
					if($_GET["pagina"]==1){
						header("location:index.php");
					}else{
						$pagina=$_GET["pagina"];
					}
				}else{
					$pagina=1;
				}
				
				$desde=($pagina-1)*$cantidad_registros;
				
				$sql_total="SELECT * FROM electronics_components WHERE Tipo='Analógico'";
				$resultado=$conexion->prepare($sql_total);
				$resultado->execute(array());
				
				$num_filas=$resultado->rowCount();
				$total_paginas=ceil($num_filas/$cantidad_registros);
				
				echo "Total Registros: " . $num_filas . "<br>";
				echo "Pagina " . $pagina . "/" . $total_paginas . "<br>";
				
				$sql_limite="SELECT * FROM electronics_components WHERE Tipo='Analógico' LIMIT $desde,$cantidad_registros";
				$resultado=$conexion->prepare($sql_limite);
				$resultado->execute(array());
				
				while($registros=$resultado->fetch(PDO::FETCH_ASSOC)) {
					echo "Componente: " . $registros["Componentes"] . ", Cantidad: " . $registros["Cantidad"] . ", Encapsulado: " . $registros["Encapsulado"] . "<br>";
				}
			}catch (Exception $e){
				echo "Error: " . $e->getMessage();
				die("<br> Linea Error: " . $e->getLine());
			}
			// --------------- Paginación -------------
			for($i=1;$i<=$total_paginas;$i++){
				echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
			}
		?>
    </body>
</html>