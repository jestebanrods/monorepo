<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uso Cookies</title>
        <style>
			img{
				border-radius: 50px;
				border:#000000 solid 1px;
				align-content:center;
				margin:auto;
				margin-left:20px;
				margin-right:20px;
			}
			table,h1 {
				margin:auto;
				margin-top:20px;
				text-align:center;
			}
        </style>
    </head>
    <body>
		<?php
            if(isset($_COOKIE["Idioma"])) {
                if($_COOKIE["Idioma"]=="spa"){
                    header("location:PagEspañol.html");
                }else if($_COOKIE["Idioma"]=="eng"){
                    header("location:PagIngles.html");
                }
            }
        ?>
    	<h1>Seleccionar Idioma</h1>
        <table>
        	<tr>
        		<td>
                	<a href="CreaCookie.php?idioma=spa">
                		<img src="spa.jpg" width="50" height="50">
					</a>
                </td>
        		<td>
                   	<a href="CreaCookie.php?idioma=eng">
	                	<img src="eng.png" width="50" height="50">
                    </a>
               	</td>
        	</tr>
        </table>
    </body>
</html>