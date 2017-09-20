<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <style>
			body {
				background-color:#FFFCE9;
			}
			h1 {
				text-align:center;
				margin:auto;
			}
			table {
				margin:auto;
				margin-top:20px;
				border:2px #000000 dashed;
				padding:15px;
			}
        </style>
    </head>
    <body>
    	<h1>Inicio Sesión</h1>
        <form action="CompruebaLogin.php" method="post">
        	<table>
        		<tr>
        			<td><b>Usuario:</b></td>
        			<td><input type="text" name="user"></td>
        		</tr>
        		<tr>
        			<td><b>Contraseña:</b></td>
        			<td><input type="password" name="pass"></td>
        		</tr>
                <tr>
                	<td></td>
                    <td><br><input type="submit" value="Iniciar Sesión"></td>
                </tr>
        	</table>
        </form>
    </body>
</html>