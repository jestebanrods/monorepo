<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <style>
            td {
                border: 1px solid #FFF;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>Componentes</td>
<?php

foreach ($matrizProductos as $registro) {
    echo "<tr><td>" . $registro["Componentes"] . "</td></tr>";
}

?>
        </table>
    </body>
</html>