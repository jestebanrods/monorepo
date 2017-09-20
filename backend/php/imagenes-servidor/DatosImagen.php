<?php
	$Nombre_Imagen=$_FILES["Imagen"]["name"];
	$Tipo_Imagen=$_FILES["Imagen"]["type"];
	$Tamano_Imagen=$_FILES["Imagen"]["size"];
	$Carpeta_Temporal=$_FILES["Imagen"]["tmp_name"];
	echo $Tipo_Imagen . "<br>";
	echo $Tamano_Imagen . "<br>";
	if($Tamano_Imagen<=1000000) {
		if($Tipo_Imagen == "image/jpeg" || $Tipo_Imagen == "image/jpg" || $Tipo_Imagen == "image/png") {
			$Carpeta_Destino=$_SERVER["DOCUMENT_ROOT"] . "/PHP/Subidas/";
			move_uploaded_file($Carpeta_Temporal, $Carpeta_Destino.$Nombre_Imagen);
			require_once("Config.php");	
			try{
				$conexion_db=new PDO(
					"mysql:host=". DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
				$conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conexion_db->exec("SET CHARACTER SET utf8");
				$sql="UPDATE " . DB_TABLE ." SET foto=:foto WHERE usuario='jossiejers'";
				$resultado=$conexion_db->prepare($sql);
				$resultado->execute(array(":foto"=>$Nombre_Imagen));
				echo "Registro Insertado Con Exito<br>";
				$resultado->closeCursor();
			}catch(Exception $e){
				echo "Error Al Contecatar Con La BBDD<br>";
				echo "La Linea De Error Es: " . $e->getLine();
			}
			echo "Imágen Súbida";
		}else {
			echo "Tipo Imágen Incorrecto" . "<br>";
			echo "Archivo Permitidos: jpeg, jpg, png" . "<br>";
		}
	} else {
		echo "Tamaño Imágen Incorrecto" . "<br>";
		echo "Tamaño Debe Ser Menor De 1MB" . "<br>";
	}
?>