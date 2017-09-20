<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Actualizar Registro</title>
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
        <h2>Actualizar Registro</h2>
    	<form action="ResultadoBusqueda.php" method="get">
            <table>
                <tr>
                	<td>Buscar: </td>
                    <td><input type="text" name="buscar"></td>
                    <td><input type="submit" value="Consultar Componente"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>