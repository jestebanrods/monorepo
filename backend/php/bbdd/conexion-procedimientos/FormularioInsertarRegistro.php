<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertar Registro</title>
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
    <h2>Insertar Registro</h2>
	<form name="inventario" action="InsertarRegistro.php" method="get">
		<table>
			<tr>
				<td>ID: </td>
		      	<td><input type="number" name="id"></td>
		    </tr>
		    <tr>
		      	<td>Componente: </td>
		      	<td><input type="text" name="componente"></td>
		    </tr>
		    <tr>
		      	<td>Cantidad: </td>
		      	<td><input type="number" name="cantidad"></td>
		    </tr>
		    <tr>
		      	<td>Encapsulado: </td>
		      	<td><input type="text" name="encapsulado"></td>
		    </tr>
		    <tr>
		      	<td>Tipo</td>
		      	<td><input type="text" name="tipo"></td>
		    </tr>
		    <tr>
		      	<td>&nbsp;</td>
		      	<td>&nbsp;</td>
		    </tr>
		    <tr>
		    	<td></td>
		      	<td class="botones">
		      		<input type="submit" name="enviar" value="Agregar">
		    		<input type="reset" name="borrar" value="Borrar">
		    	</td>
		    </tr>
	  	</table>
	</form>
	</body>
</html>