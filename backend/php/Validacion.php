<link rel="stylesheet" type="text/css" href="EstilosValidacionFormulario.css">

<?php
	if(isset($_POST["enviando"])) {
		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];
		if($usuario=="Jossie" && $edad>=18) {
			echo "<p class='validado'>Puedes Entrar</p>";
		}else {
			echo "<p class='no_validado'>No Puedes Entrar</p>";
		}
	}
?>