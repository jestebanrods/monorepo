<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <style>
			body {
				background-color:#FFFCE9;
			}
			h1,h2 {
				text-align:center;
				margin:auto;
				margin-top:10px;
			}
			table {
				margin:auto;
				margin-top:10px;
				border:2px #000000 dashed;
				padding:15px;
			}
        </style>
    </head>
    <body>
		<?php
			$autenticado=false;
			if(isset($_POST["enviar"])) {			
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
						$autenticado=true;
						if(isset($_POST["recordar"])) {
							setcookie("nombre_usuario", $_POST["user"], time()+86400);
						}
					}else {
						echo "Error. Usuario/Contraseña No Encontrado";
					}
				}
				catch (Exception $E){
					echo "Error: " . $E->getLine();
				}
			}
    	?>
        <?php
			if(!$autenticado) {
				if(!isset($_COOKIE["nombre_usuario"])) {
					include("FormularioInicioSesion.html");
				}
			}
			if(isset($_COOKIE["nombre_usuario"])) {
				echo $_COOKIE["nombre_usuario"];
			}else if($autenticado) {
				echo $_POST["user"];
			}
		?>
        <h2>Contenido WEB</h2>
        <table>
        	<tr>
        		<td><img src="img1.jpg" width="200" height="150"></td>
        		<td><img src="img3.jpg" width="200" height="150"></td>
        	</tr>
        	<tr>
        		<td><img src="img2.png" width="200" height="150"></td>
        		<td><img src="img4.png" width="200" height="150"></td>
        	</tr>
        </table>
        <?php
			if($autenticado || isset($_COOKIE["nombre_usuario"])) {
				include("ZonaMiembros.html");
			}
		?>
    </body>
</html>