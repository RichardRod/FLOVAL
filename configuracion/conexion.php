<?php

class Conexion {

    public static function conectar() {
        require_once('configuracion.php');

        $conexion = new mysqli(host, user, password, database);

        if ($conexion->connect_error) {
            die($conexion->connect_error);
        }//fin de if

        return $conexion;
    }//fin de la funcion conectar

//fin de la funcion conectar
}

//fin de la clase Conexion