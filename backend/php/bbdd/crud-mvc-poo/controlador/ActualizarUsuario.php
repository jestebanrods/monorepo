<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>
    <body>
    	<?php
			if(!isset($_POST["actualizar"])){
				$id=$_GET["id"];
				$nombre=$_GET["nombre"];
				$apellido=$_GET["apellido"];
				$direccion=$_GET["direccion"];
			}else{
                require_once "../Modelo/Modificacion_Usuarios.php";
				$usuario = new UsuariosModelo();
				$ide=$_POST["id"];
				$nom=$_POST["nombre"];
				$ape=$_POST["apellido"];
				$dir=$_POST["direccion"];
                $usuario->updateUsuario($ide, $nom, $ape, $dir);
			}
		?>   
        <h1>ACTUALIZAR</h1> 
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <table width="25%" border="0" align="center">
                <tr>|
                    <td></td>
                    <td><label for="id"></label>
                    <input type="hidden" name="id" value="<?php echo $id;?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><label for="nom"></label>
                    <input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><label for="ape"></label>
                    <input type="text" name="apellido" value="<?php echo $apellido;?>"></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><label for="dir"></label>
                    <input type="text" name="direccion" value="<?php echo $direccion;?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="actualizar" value="Actualizar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>