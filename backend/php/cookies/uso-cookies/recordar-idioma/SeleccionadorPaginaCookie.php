<!doctype html>
<html>
    <head>
	    <meta charset="utf-8">
    	<title>Uso Cookie</title>
    </head
    <body>
    	<?php
			if(!$_COOKIE["Idioma"]) {
				header("location:PreguntaIdioma.php");
			}else if($_COOKIE["Idioma"]=="spa"){
				header("location:PagEspañol.html");
			}else if($_COOKIE["Idioma"]=="eng"){
				header("location:PagIngles.html");
			}
		?>
    </body>
</html>