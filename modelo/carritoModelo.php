<?php

class CarritoModelo
{
    private $conexion;
    
    public function __construct() {
        try
        {
            require_once 'configuracion/conexion.php';
            $this->conexion = Conexion::conectar();
        }//fin de try 
        catch (Exception $ex) {
            
            die($ex->getMessage());
        }//fin de catch
        
    }//fin del constructor
    
}//fin de la clase CarritoModelo
