<?php

class Conexion
{

    public static function conectar()
    {

        $link = new PDO(
            "mysql:host=localhost;
            dbname=salacomputo",
            "root",
            ""
        );

        $link->exec("set names utf8");

        return $link;

    }

}
