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
						session_start();
						$_SESSION["usuario"]=$_POST["user"];			
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
			if(!isset($_SESSION["usuario"])) {
				include("FormularioInicioSesion.html");
			}else {
				echo "Usuario:" . $_SESSION["usuario"];
        		echo "<br><a href='Cierre.php'>Cerrar Seción</a>";
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
    </body>
</html>