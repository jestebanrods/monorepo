<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sesión Usuarios</title>
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
		<?php
            echo "Usuario: " . $_SESSION["usuario"];
        ?>
        <p>Información Usuario 1 Registrado</p>
        <table width="277" height="114" border="1">
          <tbody>
            <tr>
              <td colspan="3">Zona Usuarios Registrados</td>
            </tr>
            <tr>
              <td><a href="Vinculos1.php">Página 1</a></td>
              <td><a href="Vinculos2.php">Página 2</a></td>
              <td><a href="Vinculos3.php">Página3</a></td>
            </tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
    </body>
</html>