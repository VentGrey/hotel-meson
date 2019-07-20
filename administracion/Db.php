<?php

/**
 * Conexión a la base de datos
 * Autor: Juan Carlos
 * Sitio Web: localhost/prueba
 */
class Db
{
    private static $instance = NULL;

    private function __construct()
    {
    }

    public static function getConnect()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('sqlite:login.sqlite3');
        }
        return self::$instance;
    }
}


?>
