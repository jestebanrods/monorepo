<?php
    $usuario= $_POST["user"];
    $contrasena= $_POST["pass"];
	$pass_cifrado=password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>12));
    try{
        $base=new PDO('mysql:host=localhost; dbname=usuarios', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");		
        $sql="INSERT INTO usuarios_pass (USUARIOS, PASSWORD) VALUES (:usuario, :contrasena)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":usuario"=>$usuario, ":contrasena"=>$pass_cifrado));
        echo "Registro insertado";
        $resultado->closeCursor();
    }catch(Exception $e){			
        echo "Línea del error: " . $e->getLine();
    }
?>