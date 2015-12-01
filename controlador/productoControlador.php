<?php

require_once 'controlador/controladorEstandar.php';

session_start();

class ProductoControlador extends ControladorEstandar {

    private $modelo;

    public function __construct() {
        require_once 'modelo/productoModelo.php';
        $this->modelo = new Producto();
    }

//fin del constructor

    public function ejecutar() {
        switch ($_GET['accion']) {
            case 'listar':
                $productos = $this->modelo->listar();

                break;

            case 'singleProducto':
                if (!isset($_SESSION['tipoUsuario'])) {
                    $cabecera = file_get_contents('vista/header.html');
                    $array = array('{usuario}' => '');
                    $cabecera = strtr($cabecera, $array);
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $vista = file_get_contents('vista/producto/singleProducto.html');
                    $footer = file_get_contents('vista/footer.html');


                    $miProducto = $this->modelo->obtener($_REQUEST['id']);

                    $diccionario = array(
                        '{id}' => $miProducto["id"],
                        '{nombreProducto}' => $miProducto["nombreProducto"],
                        '{marca}' => $miProducto["marca"],
                        '{precio}' => $miProducto["precio"],
                        '{existencias}' => $miProducto["existencias"],
                        '{tipo}' => $miProducto["tipo"],
                        '{color}' => $miProducto["color"],
                        '{descripcion}' => $miProducto["descripcion"]
                    );

                    $vista = strtr($vista, $diccionario);

                    $array = array('{usuario}' => $_SESSION['userName']);
                    $cabecera = strtr($cabecera, $array);
                    echo $cabecera . $jumbotron . $vista . $footer;
                }//fin de if
                else if ($_SESSION['tipoUsuario'] == 'cliente') {
                    
                     $cabecera = file_get_contents('vista/hedaerLogueado.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $vista = file_get_contents('vista/producto/singleProducto.html');
                    $footer = file_get_contents('vista/footer.html');
                    
                    $diccionario = array(
                        '{usuario}' => $_SESSION['userName'],
                        '{contadorArticulos}' => count($_SESSION['carrito'])
                    );
                    
                    $cabecera = strtr($cabecera, $diccionario);
                    
                    $miProducto = $this->modelo->obtener($_REQUEST['id']);

                    $diccionario = array(
                        '{id}' => $miProducto["id"],
                        '{nombreProducto}' => $miProducto["nombreProducto"],
                        '{marca}' => $miProducto["marca"],
                        '{precio}' => $miProducto["precio"],
                        '{existencias}' => $miProducto["existencias"],
                        '{tipo}' => $miProducto["tipo"],
                        '{color}' => $miProducto["color"],
                        '{descripcion}' => $miProducto["descripcion"]
                    );

                    $vista = strtr($vista, $diccionario);

                    echo $cabecera . $jumbotron . $vista . $footer;
                }//fin de else                
                break;


            case 'prueba':
                echo 'Prueba';
                break;

            case 'crudProductos':

                $estaLogueado = ControladorEstandar::estaLogueado();
                $usuarioAdministrador = ControladorEstandar::esAdministrador();

                if ($estaLogueado != true) {
                    echo 'No has iniciado sesion';
                } else if ($usuarioAdministrador != 'administrador') {
                    echo 'No tienes permisisos';
                } else if ($usuarioAdministrador == 'administrador') {
                    $productoCrud = new Producto();

                    if (isset($_REQUEST['id'])) {
                        $productoCrud = ($this->modelo->obtener($_REQUEST['id']));
                    }//fin de if
                    //obtener vista
                    $cabecera = file_get_contents('vista/headerAdministrador.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $vista = file_get_contents('vista/producto/crudProducto.html');
                    $footer = file_get_contents('vista/footer.html');

                    $inicioFila = strrpos($vista, '<tr>');
                    $finanlFila = strrpos($vista, '</tr>') + 5;

                    $fila = substr($vista, $inicioFila, $finanlFila - $inicioFila);
                    $productos = $this->modelo->listar();

                    foreach ($productos as $row) {
                        $newFila = $fila;

                        $diccionario = array(
                            '{id}' => $row['id'],
                            '{nombreProducto}' => $row['nombreProducto'],
                            '{marca}' => $row['marca'],
                            '{precio}' => $row['precio'],
                            '{existencias}' => $row['existencias'],
                            '{tipo}' => $row['tipo'],
                            '{color}' => $row['color'],
                            '{descripcion}' => $row['descripcion'],
                            '{imagenUno}' => $row['imagenUno']
                        );

                        $newFila = strtr($newFila, $diccionario);
                        $filas .= $newFila;
                        $cont++;
                    }//end foreach

                    $vista = str_replace($fila, $filas, $vista);

                    echo $cabecera . $jumbotron . $vista . $footer;
                }

                break;

            case 'guardar':
                $producto = new Producto();

                $producto->id = $_REQUEST['id'];
                $producto->nombreProducto = $_REQUEST['nombreProducto'];
                $producto->marca = $_REQUEST['marca'];
                $producto->precio = $_REQUEST['precio'];
                $producto->existencias = $_REQUEST['existencias'];
                $producto->imagenUno = $_REQUEST['imagenUno'];
                $producto->tipo = $_REQUEST['tipo'];
                $producto->color = $_REQUEST['color'];
                $producto->descripcion = $_REQUEST['descripcion'];

                $producto->id > 0 ? $this->modelo->actualizar($producto) : $this->modelo->registrar($producto);

                header('Location: ?control=Producto');


                break;

            case 'agregar':
               
                $producto = new Producto();

                if (isset($_REQUEST['id'])) {

                    $producto = ($this->modelo->obtener($_REQUEST['id']));
                }//fin de if

                require_once 'vista/headerAdministrador.html';
                require_once 'vista/jumbotron.html';
                require_once 'vista/producto/formularioProducto.html';
                require_once 'vista/footer.html';

                break;

            case 'eliminar':
                $this->eliminar();
                break;
        }//fin de switch
    }

    public function eliminar() {
        $this->modelo->eliminar($_REQUEST['id']);
        header('Location: index.php?control=Producto');
    }

//fin de la funcion ejecutar
}
