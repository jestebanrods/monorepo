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
				text-align:center;
            }
            body{
                background-color:#FFC;
            }
            .botones, input {
                text-align:center;
            }
        </style>
    </head>
    <body>
    <h1>Inventario Componentes</h1>
    <h2>Resultado Busqueda</h2>
    	<?php
			$busqueda=$_GET["buscar"];
			
			require("ConfiguracionConexionBBDD.php");
			
			$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
			if(mysqli_connect_errno()) {
				echo "Fallo Conexión Base Datos";
				exit();
			}
			
			mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
			mysqli_set_charset($conexion, "utf8");
			
			$consulta="SELECT * FROM $db_tabla WHERE Componentes LIKE '%$busqueda%'";
			$resultado=mysqli_query($conexion, $consulta);
			
			echo "<form action='ActualizarRegistro.php' method='get'>";
			echo "<table>";
			echo "<tr><td>ID</td><td>Componente</td><td>Cantidad</td><td>Encapsulado</td><td>Tipo</td></tr>";
			
			while($filas=mysqli_fetch_assoc($resultado)) {
				echo "<tr>";
				echo "<td><input readonly type='number' name='id' value='" . $filas["ID"] . "'></td>";
				echo "<td><input type='ext' name='componente' value='" . $filas["Componentes"] . "'></td>";
				echo "<td><input type='number' name='cantidad' value='" . $filas["Cantidad"] . "'></td>";
				echo "<td><input type='text' name='encapsulado' value='" . $filas["Encapsulado"] . "'></td>";
				echo "<td><input type='text' name='tipo' value='" . $filas["Tipo"] . "'></td>";
				echo "<td><input type='submit' name='enviar' value='Actualizar'" . "<td>";
				echo "</tr>";
			}
			echo "</table></form>";
			
			mysqli_close($conexion);
		?>
    </body>
</html>