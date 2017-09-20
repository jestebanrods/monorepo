<?php

class UsuariosModelo {
    private $db;
    private $usuarios;

    public function __construct() {
        require_once "Conectar.php";
        $this->db = Conectar::Conexion();
        $this->usuarios = array();
    }

    public function getUsuarios() {
        require "Paginacion.php";
        $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $desde,$cantidad_registros");
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->usuarios[] = $filas;
        }
        return $this->usuarios;
    }

    public function deleteUsuario($id) {
        $consulta = $this->db->query("DELETE FROM datos_usuarios WHERE id='$id'");
    }

    public function updateUsuario($id, $nom, $ape, $dir) {
        $consulta = "UPDATE datos_usuarios SET nombre=:nom, apellido=:ape, direccion=:dir WHERE id=:ide";
        $resultado = $this->db->prepare($consulta);
        $resultado->execute(array(":ide" => $id, ":nom" => $nom, ":ape" => $ape, ":dir" => $dir));
        header("location:../index.php");
    }
}

?>