<?php

namespace jestebanrs\Singleton;

class Configurar
{
    /**
     * @var null
     */
    private static $instancia = null;

    /**
     * @return Configurar|null
     */
    public static function getInstancia()
    {
        self::$instancia == null ? self::$instancia = new self() : self::$instancia;
        return self::$instancia;
    }

    /**
     * @param $dbName
     * @return string
     */
    public function setConexion($dbName)
    {
        return "Conectado a $dbName";
    }
}