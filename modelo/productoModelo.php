<?php

class Producto
{
    private $conexion;
    
    public $id;
    public $nombreProducto;
    public $marca;
    public $precio;
    public $existencias;
    public $imagenUno;
    public $imagenDos;
    public $imagenTres;
    public $tipo;
    public $color;
    public $descripcion;
    
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
    
    public function listar()
    {
        try
        {
                $stm = $this->conexion->query("SELECT * FROM Producto");
                
                while ($fila = $stm->fetch_array())
                {
                    $productos[] = $fila;
                }
                
                return $productos;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }//fin de la funcion Listar
    
    public function obtener($id)
    {
        try
        {
            //echo "SELECT * FROM Producto WHERE id='" . $_REQUEST['id'] . "'";
            $stm = $this->conexion->query("SELECT * FROM Producto WHERE id='" . $_REQUEST['id'] . "'");
            $getRow = $stm->fetch_array();
      
            
            return $getRow;
        } catch (Exception $ex) {
            echo 'Pelukin';
        }
    }//fin de la funcion obtener
    
    public function eliminar()
    {
        try
        {
            $id = $this->conexion->real_escape_string($id);
            $sentencia = $this->conexion->query("DELETE FROM Producto WHERE id= '$id'");
        }//fin de try 
        catch (Exception $ex)
        {
            die($ex->getMessage());
        }//fin de catch
    }//fin de la funcion eliminar
    
    public function actualizar($data)
    {
        try
        {
            $nombreProducto = $data->nombreProducto;
            $marca = $data->marca;
            $precio = $data->precio;
            $existencias = $data->existencias;
            $imagenUno = $data->imagenUno;
            $tipo = $data->tipo;
            $color = $data->color;
            $descripcion = $data->descripcion;
            
            $sql = "UPDATE Producto SET"
                    . "nombreProducto='$nombreProducto'";
        }//fin de try 
        catch (Exception $ex) 
        {

        }//fin de catch
    }//fin de la funcion actualizar
    
    public function registrar(Producto $data)
    {
        try
        {
            $nombreProducto = $data->nombreProducto;
            $marca = $data->marca;
            $precio = $data->precio;
            $existencias = $data->existencias;
            $imagenUno = $data->imagenUno;
            $tipo = $data->tipo;
            $color = $data->color;
            $descripcion = $data->descripcion;
            
            $sql = "INSERT INTO Producto (id, nombreProducto, marca, precio, existencias,"
                    . "imagenUno, tipo, color, descripcion) VALUES (null, '$nombreProducto', '$marca', '$precio', "
                    . "'$existencias', '$imagenUno', '$tipo', '$color', '$descripcion')";
            
            $sentencia = $this->conexion->query($sql);
        } catch (Exception $ex) {
            
        }
    }//fin de la funcion registrar
    
    
}