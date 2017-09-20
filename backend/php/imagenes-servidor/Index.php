<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subir Imágenes Servidor</title>
    </head>
    <body>
    	<form action="DatosImagen.php" method="post" enctype="multipart/form-data">
        	<table>
            	<tr>
                	<td>
                        <label for="Imagen">Imagen: </label>
                		<input type="file" name="Imagen"/>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<input type="submit" value="Enviar"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>