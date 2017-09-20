<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operador Ternario</title>
		<style>
            h1 {
                text-align:center;
			}
            table {
                background-color:#FFC;
                padding:5px;
                border:#666 5px solid;
            }
            .no_validado {
                font-size:18px;
                color:#F00;
                font-weight:bold;
            }
            .validado {
                font-size:18px;
                color:#0C3;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <h1>USANDO CONDICIONALES</h1>
        <form action="" method="post" name="datos_usuario" id="datos_usuario">
          <table width="15%" align="center">
            <tr>
              <td>Usuario:</td>
              <td>
              	<label for="usuario"></label>
              	<input type="text" name="usuario" id="usuario"/>
              </td>
            </tr>
            <tr>
              <td>Contraseña:</td>
              <td>
              	<label for="contraseña"></label>
              	<input type="password" name="contraseña" id="contraseña"/>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center">
              	<input type="submit" name="enviando" id="enviando" value="Enviar"/>
              </td>
            </tr>
          </table>
        </form>
        <?php
			if(isset($_POST["enviando"])) {
				$usuario=$_POST["usuario"];
				$contraseña=$_POST["contraseña"];
				echo ($usuario=="Jossie" && $contraseña=="0000")? "Ingresó":"Accesos Denegado";
			}
		?>
    </body>
</html>