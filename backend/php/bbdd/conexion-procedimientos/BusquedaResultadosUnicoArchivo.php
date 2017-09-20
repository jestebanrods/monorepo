<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Busqueda</title>
		<?php
			function ejecutaConsulta($busqueda) {				
				require("ConfiguracionConexionEpizy.php");
				$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena);
				if(mysqli_connect_errno()) {
					echo "Fallo Conexión Base Datos";
					exit();
				}
				mysqli_select_db($conexion, $db_nombre) or die ("No Sé Encuentra La BBDD");
				mysqli_set_charset($conexion, "utf8");
				$consulta="SELECT * FROM $db_tabla WHERE Componentes LIKE '%$busqueda%'";
				$resultado=mysqli_query($conexion, $consulta);
				while($filas=mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
					echo "<table><tr><td>";
					echo $filas["Cantidad"] . "</td><td>";
					echo $filas["Componentes"] . "</td><td>";
					echo $filas["Encapsulado"] . "</td></tr></table>";
					echo "<br>";
				}
				mysqli_close($conexion);
			}
    	?>
    </head>
    <body>
        <?php
			$mi_busqueda=$_GET["buscar"];
			$mi_pagina=$_SERVER['PHP_SELF'];
			if($mi_busqueda!=NULL) {
				ejecutaConsulta($mi_busqueda);
			}else {
				echo ("<form action='" . $mi_pagina . "' method='get'>
						<label>Buscar: <input type='text' name='buscar'></label>
			            <input type='submit' value='Consultar'/>
        			   </form>");
			}
		?>
    </body>
</html>