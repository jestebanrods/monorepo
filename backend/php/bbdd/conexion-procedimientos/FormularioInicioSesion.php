<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio Sesión</title>
		<style>
			h1, h2{
				text-align:center;
				width:50%;
				margin:auto;
			}
			table{
				border:1px solid #000;
				padding:20px;
				margin: 20px auto;
				align-content: center;
			}
			body{
				background-color:#FFC;
			}
			.botones {
				text-align:center;
			}
		</style>
	</head>
	<body>
	<h1>Inventario Componentes</h1>
    <h2>Inicio Sesión</h2>
	<form name="sesion" action="IniciarSesionregistro.php" method="post">
		<table>
			<tr>
				<td>Usuario: </td>
		      	<td><input type="text" name="usuario"></td>
		    </tr>
		    <tr>
		      	<td>Contraseña: </td>
		      	<td><input type="password" name="contrasena"></td>
		    </tr>
		    <tr>
		      	<td>&nbsp;</td>
		      	<td>&nbsp;</td>
		    </tr>
		    <tr>
		    	<td></td>
		      	<td class="botones">
		      		<input type="submit" name="enviar" value="Aceptar">
		    		<input type="reset" name="borrar" value="Borrar">
		    	</td>
		    </tr>
	  	</table>
	</form>
	</body>
</html>