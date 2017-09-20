<?php
	require("Config.php");	
	class Conexion {
		protected $conexion_db;
		public function Conexion() {
			$this->conexion_db=new MySQLi(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			if($this->conexion_db->connect_errno) {
				echo "Fallo Conexión A La BBDD MySQL: " . $this->conexion_db->connect_error;
				return;
			}
			$this->conexion_db->set_charset(DB_CHARSET);
			echo "Conexión Exitosa <br>";
		}
	}
?>