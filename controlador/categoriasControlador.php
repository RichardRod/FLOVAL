<?php

require_once 'controlador/controladorEstandar.php';

class CategoriasControlador extends ControladorEstandar {

    private $modelo;
    private $producto;

    //constructor
    public function __construct() {
        require_once 'modelo/categoriasModelo.php';
        $this->modelo = new CategoriasModelo();

        require_once 'modelo/productoModelo.php';
        $this->producto = new Producto();
    }

    public function ejecutar() {
        switch ($_GET['accion']) {
            case 'todas':

                $this->mostrarCatalogo();

                break;
        }
    }

    public function mostrarCatalogo() {
        if ($_SESSION['tipoUsuario'] == 'administrador') {
            $cabecera = file_get_contents('vista/headerAdministrador.html');
            $jumbotron = file_get_contents('vista/jumbotron.html');
            $vista = file_get_contents('vista/categorias/todasCategorias.html');
            $footer = file_get_contents('vista/footer.html');

            $inicioFila = strrpos($vista, '<!--{contenedor}-->');
            $finanlFila = strrpos($vista, '<!--{/contenedor}-->') + 13;

            $fila = substr($vista, $inicioFila, $finanlFila - $inicioFila);

            $productos = $this->producto->listar();

            foreach ($productos as $row) {
                $newFila = $fila;

                $diccionario = array(
                    '{id}' => $row['id'],
                    '{nombreProducto}' => $row['nombreProducto'],
                    '{imagenUno}' => $row['imagenUno'],
                    '{precio}' => $row['precio'],
                    '{color}' => $row['color']
                );

                $newFila = strtr($newFila, $diccionario);
                $filas .= $newFila;
            }//end foreach

            $vista = str_replace($fila, $filas, $vista);
        } else if ($_SESSION['tipoUsuario'] == 'cliente') {
            $cabecera = file_get_contents('vista/hedaerLogueado.html');
            $jumbotron = file_get_contents('vista/jumbotron.html');
            $vista = file_get_contents('vista/categorias/todasCategorias.html');
            $footer = file_get_contents('vista/footer.html');

            $inicioFila = strrpos($vista, '<!--{contenedor}-->');
            $finanlFila = strrpos($vista, '<!--{/contenedor}-->') + 13;

            $fila = substr($vista, $inicioFila, $finanlFila - $inicioFila);

            $productos = $this->producto->listar();

            foreach ($productos as $row) {
                $newFila = $fila;

                $diccionario = array(
                    '{id}' => $row['id'],
                    '{nombreProducto}' => $row['nombreProducto'],
                    '{imagenUno}' => $row['imagenUno'],
                    '{precio}' => $row['precio'],
                    '{color}' => $row['color']
                );

                $newFila = strtr($newFila, $diccionario);
                $filas .= $newFila;
            }//end foreach

            $vista = str_replace($fila, $filas, $vista);

            $diccionario = array(
                '{usuario}' => $_SESSION['userName'],
                '{contadorArticulos}' => count($_SESSION['carrito'])
            );

            $cabecera = strtr($cabecera, $diccionario);
        } else {
            $cabecera = file_get_contents('vista/header.html');
            $array = array('{usuario}' => '');
            $cabecera = strtr($cabecera, $array);
            $jumbotron = file_get_contents('vista/jumbotron.html');
            $vista = file_get_contents('vista/categorias/todasCategorias.html');
            $footer = file_get_contents('vista/footer.html');

            $inicioFila = strrpos($vista, '<!--{contenedor}-->');
            $finanlFila = strrpos($vista, '<!--{/contenedor}-->') + 13;

            $fila = substr($vista, $inicioFila, $finanlFila - $inicioFila);

            $productos = $this->producto->listar();

            foreach ($productos as $row) {
                $newFila = $fila;

                $diccionario = array(
                    '{id}' => $row['id'],
                    '{nombreProducto}' => $row['nombreProducto'],
                    '{imagenUno}' => $row['imagenUno'],
                    '{precio}' => $row['precio'],
                    '{color}' => $row['color']
                );

                $newFila = strtr($newFila, $diccionario);
                $filas .= $newFila;
            }//end foreach

            $vista = str_replace($fila, $filas, $vista);
        }



        echo $cabecera . $jumbotron . $vista . $footer;
    }

}

//fin de la clase CategoriasControlador
