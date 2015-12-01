<?php

session_start();

class Usuario {

    //atributos
    private $conexion;
    
    public $id;
    public $nombreUsuario;
    public $nombre;
    public $apellido;
    public $tipoUsuario;
    public $correoElectronico;
    public $passUsuario;
    public $imagen;
    
    public function __construct() {
        try {
            require_once 'configuracion/conexion.php';
            $this->conexion = Conexion::conectar();
        }//fin de try 
        catch (Exception $ex) {

            die($ex->getMessage());
        }//fin de catch
    }

//fin del constructor

    public function listar() {
        try {
            $stm = $this->conexion->query("SELECT * FROM Usuario");

            while ($fila = $stm->fetch_array()) {
                $usuarios[] = $fila;
            }

            return $usuarios;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

//fin de la funcion Listar

    public function obtener($nombreUsuario) {
        try {
            //echo "SELECT * FROM Usuario WHERE nombreUsuario='" . $nombreUsuario . "'";
            
            $stm = $this->conexion->query("SELECT * FROM Usuario WHERE nombreUsuario='" . $nombreUsuario . "'");
            
            $getRow = $stm->fetch_array();

            //var_dump($getRow);
            return $getRow;
        } catch (Exception $ex) {
            
        }
    }//fin de la funcion obtener
    
    public function insertar(Usuario $miUsuario)
    {
        $nombreUsuario = $miUsuario->nombreUsuario;
        $nombre = $miUsuario->nombre;
        $apellido = $miUsuario->apellido;
        $tipoUsuario = $miUsuario->tipoUsuario;
        $correoElectronico = $miUsuario->correoElectronico;
        $password = $miUsuario->passUsuario;
        
        $sql = "INSERT INTO Usuario (id, nombreUsuario, nombre, apellido, tipoUsuario, correoElectronico, passUsuario) VALUES"
                . "(null, '$nombreUsuario', '$nombre', '$apellido', '$tipoUsuario', '$correoElectronico', '$password')";
        
        $sentencia = $this->conexion->query($sql);
        
        //var_dump($sentencia);
    }//fin de la funcion insertar
    
    

//fin de la funcion obtener
}

//fin de la clase Usuario
