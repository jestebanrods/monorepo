<?php
	require("Conexion.php");
	class DevuelveProductos extends Conexion {
		public function DevuelveProductos(){
			parent::__construct();
		}
		public function getTodosProductos() {
			$sql="SELECT * FROM " . DB_TABLE;
			$resultado=$this->conexion_db->query($sql);
			$productos=$resultado->fetch_all(MYSQLI_ASSOC);
			return $productos;
		}
		public function getProductos($busqueda, $categoria) {
			$sql="SELECT * FROM " . DB_TABLE . " WHERE $categoria='$busqueda'";
			$resultado=$this->conexion_db->query($sql);
			$productos=$resultado->fetch_all(MYSQLI_ASSOC);
			return $productos;
		}
	}
?>