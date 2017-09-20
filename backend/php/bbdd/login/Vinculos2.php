<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vinculo 2</title>
    </head>
    <body>
    	<?php
			session_start();
			if(!isset($_SESSION["usuario"])) {
				header("location:Login.php");
			}
		?>
        <p><a href="Cierre.php">Cerrar Seción</a></p>
    	<h1>Bienvenido Usuario</h1>
        <h2>Vinculo 2</h2>
		<?php
            echo "Usuario: " . $_SESSION["usuario"];
        ?>
        <p>Información Vinculo 2 Registrado</p>
        <p><a href="PaginaUsuariosRe.php">Volver</a></p>
    </body>
</html>