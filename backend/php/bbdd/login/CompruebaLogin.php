<?php
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASSWORD","");
	define("DB_NAME","usuarios");
	define("DB_TABLE","usuarios_pass");
	define("DB_CHARSET","UTF8");
	
	try {
		$conexion=new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM " . DB_TABLE . " WHERE USUARIOS=:user AND PASSWORD=:pass";
		$resultado=$conexion->prepare($sql);
		$user=htmlentities(addslashes($_POST["user"]));
		$pass=htmlentities(addslashes($_POST["pass"]));
		$resultado->bindValue(":user", $user);
		$resultado->bindValue(":pass", $pass);
		$resultado->execute();
		if($resultado->rowCount()!=0) {
			session_start();
			$_SESSION["usuario"]=$_POST["user"];
			header("location:PaginaUsuariosRe.php");
			
		}else {
			header("location:Login.php");
		}
	}
	catch (Exception $E){
		echo "Error: " . $E->getLine();
	}
?>