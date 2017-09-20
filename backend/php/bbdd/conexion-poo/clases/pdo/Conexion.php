<?php
	require("Config.php");	
	class Conexion {
		protected $conexion_db;
		public function Conexion() {
			try{
				$this->conexion_db=new PDO(
					"mysql:host=". DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");
			}catch(Exception $e){
				echo "Error Al Contecatar Con La BBDD<br>";
				echo "La Linea De Error Es: " . $e->getLine();
			}
		}
	}
?>