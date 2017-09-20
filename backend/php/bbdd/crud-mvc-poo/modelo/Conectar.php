<?php

class Conectar {
    public static function Conexion() {
        try {
            $conexion = new PDO("mysql:host=localhost; dbname=usuarios", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $E) {
            echo "Error" . $E->getLine();
        }
        return $conexion;
    }
}

?>