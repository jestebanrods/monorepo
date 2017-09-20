<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leer Imagen</title>
    </head>    
    <body>
    	<?php
			require_once("Config.php");	
			try{
				$conexion_db=new PDO(
					"mysql:host=". DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
				$conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conexion_db->exec("SET CHARACTER SET utf8");
				
				$sql="SELECT * FROM " . DB_TABLE ." WHERE usuario='jossiejers'";
				$resultado=$conexion_db->prepare($sql);
				$resultado->execute(array());
				
				while($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
					$ruta_img=$fila["foto"];
					echo $fila["foto"];
				}
				$resultado->closeCursor();
			}catch(Exception $e){
				echo "Error Al Contecatar Con La BBDD<br>";
				echo "La Linea De Error Es: " . $e->getLine();
			}
		?>
		<div>
        	<img src="/PHP/Subidas/<?php echo $ruta_img;?>" width="20%">
        </div>
    </body>
</html>