<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>
    <body>
		<?php
			include("conexion.php");
			
			//-------------- Calculos Paginación
			$cantidad_registros=3;
			
			if(isset($_GET["pagina"])) {					
				if($_GET["pagina"]==1){
					header("location:index.php");
				}else{
					$pagina=$_GET["pagina"];
				}
			}else{
				$pagina=1;
			}
			
			$desde=($pagina-1)*$cantidad_registros;
			
			$sql_total="SELECT * FROM datos_usuarios";
			$resultado=$conexion->prepare($sql_total);
			$resultado->execute(array());
			
			$num_filas=$resultado->rowCount();
			$total_paginas=ceil($num_filas/$cantidad_registros);
			
			//-------------- 
			$registros=$conexion->query("SELECT * FROM datos_usuarios LIMIT $desde,$cantidad_registros")->fetchAll(PDO::FETCH_OBJ);
			if(isset($_POST["nuevo"])) {
				$nombre=$_POST["Nom"];
				$apellido=$_POST["Ape"];
				$direccion=$_POST["Dir"];
				$sql="INSERT INTO datos_usuarios (nombre, apellido, direccion) VALUES (:nom, :ape, :dir)";
				$resultado=$conexion->prepare($sql);
				$resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));
				header("location:index.php");
			}
        ?>
        <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table width="50%" border="0" align="center">
                <tr >
                    <td class="primera_fila">Id</td>
                    <td class="primera_fila">Nombre</td>
                    <td class="primera_fila">Apellido</td>
                    <td class="primera_fila">Dirección</td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                </tr>
                <?php	
                    foreach($registros as $persona):
                ?>
                <tr>
                    <td><?php echo $persona->id?></td>
                    <td><?php echo $persona->nombre?></td>
                    <td><?php echo $persona->apellido?></td>
                    <td><?php echo $persona->direccion?></td>
                    <td class="bot">
                        <a href="borrar.php?id=<?php echo $persona->id?>">
                        <input type='button' name='del' value='Borrar'></a>
                    </td>
                    <td class='bot'>
                        <a href="actualizar.php?id=<?php echo $persona->id?>&nombre=<?php echo $persona->nombre?>&apellido=<?php echo $persona->apellido?>&direccion=<?php echo $persona->direccion?>"><input type='button' name='up' value='Actualizar'></a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                <tr>
                    <td></td>
                    <td><input type='text' name='Nom' size='10' class='centrado'></td>
                    <td><input type='text' name='Ape' size='10' class='centrado'></td>
                    <td><input type='text' name=' Dir' size='10' class='centrado'></td>
                    <td class='bot'><input type='submit' name='nuevo' value='Insertar'></td>
                </tr>    
            </table>
        </form>
		<div class="centrado" style="margin-top:10px">
        <?php
			echo "Total Registros: " . $num_filas . "<br>";
			echo "Pagina " . $pagina . "/" . $total_paginas . "<br>";
        	// --------------- Paginación -------------
			for($i=1;$i<=$total_paginas;$i++){
				echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
			}
		?>
        </div>
        <p>&nbsp;</p>
    </body>
</html>