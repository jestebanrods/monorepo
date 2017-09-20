<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MVC</title>
        </style>
    </head>
    <body>
<?php
include "Modelo/Paginacion.php";
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
foreach ($matrizUsuarios as $persona):
?>
                <tr>
                    <td><?php echo $persona["id"] ?></td>
                    <td><?php echo $persona["nombre"] ?></td>
                    <td><?php echo $persona["apellido"] ?></td>
                    <td><?php echo $persona["direccion"] ?></td>
                    <td class="bot">
                        <a href="Controlador/Borrar_Usuario.php?id=<?php echo $persona["id"] ?>">
                        <input type='button' name='del' value='Borrar'></a>
                    </td>
                    <td class='bot'>
                        <a href="Controlador/ActualizarUsuario.php?id=<?php echo $persona["id"] ?>&nombre=<?php echo $persona["nombre"] ?>&apellido=<?php echo $persona["apellido"] ?>&direccion=<?php echo $persona["direccion"] ?>"><input type='button' name='up' value='Actualizar'></a> 
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
for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
}

?>
        </div>
    </body>
</html>