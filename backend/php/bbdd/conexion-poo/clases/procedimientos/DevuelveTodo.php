<?php
	require ("DevuelveProductos.php");
	$productos=new DevuelveProductos();
	$array_productos=$productos->getTodosProductos();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta BBDD</title>
    </head>    
    <body>
    	<?php
			foreach($array_productos as $elemento){
				echo "
				<table>	
					<tr>
						<td>" . $elemento["ID"] . "</td>
						<td>". $elemento["Componentes"] . "</td>
						<td>" . $elemento["Cantidad"] . "</td>
					</tr>
				</table>
				";
			}
		?>
    </body>
</html>