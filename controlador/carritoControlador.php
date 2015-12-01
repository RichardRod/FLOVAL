<?php

session_start();

require_once('controlador/controladorEstandar.php');

class CarritoControlador extends ControladorEstandar {

    private $modelo;
    private $miProducto;

    public function __construct() {
        require_once 'modelo/carritoModelo.php';
        $this->modelo = new CarritoModelo();

        require_once 'modelo/productoModelo.php';
        $this->miProducto = new Producto();
    }

//fin del constructor

    public function ejecutar() {
        switch ($_GET['accion']) {
            case 'verCarrito':

                if (!isset($_SESSION['userName'])) {
                    $cabecera = file_get_contents('vista/header.html');
                    $array = array('{usuario}' => '');
                    $cabecera = strtr($cabecera, $array);
                    $contenido = file_get_contents('vista/usuario/formulariosPrincipales.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $footer = file_get_contents('vista/footer.html');

                    
                } else if ($_SESSION['tipoUsuario'] == 'cliente') {
                    $cabecera = file_get_contents('vista/hedaerLogueado.html');
                    $contenido = file_get_contents('vista/carrito/carrito.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $footer = file_get_contents('vista/footer.html');

                    $diccionario = array(
                        '{usuario}' => $_SESSION['userName'],
                        '{contadorArticulos}' => count($_SESSION['carrito'])
                    );

                    $cabecera = strtr($cabecera, $diccionario);
                    
                
                    
                    $total = 0;
                    if(isset($_SESSION['carrito']))
                    {
                        
                        
                        $inicioFila = strrpos($contenido, '<!--INICIO-->');
                        $finanlFila = strrpos($contenido, '<!--FIN-->') + 10;
                        
                        $fila = substr($contenido, $inicioFila, $finanlFila - $inicioFila);
                        
                        $datos = $_SESSION['carrito'];
                        $total = 0;
                        $subtotal = 0;
                        $iva = 0;
                        for($i = 0; $i < count($datos); $i++)
                        {
                            $newFila = $fila;
                            $subtotal = $subtotal + $datos[$i]['precio'] * $datos[$i]['cantidad'];
                            
                            $diccionario = array(
                            
                            '{nombreProducto}' => $datos[$i]['nombreProducto'],
                            '{marca}' => $datos[$i]['marca'],
                            '{precio}' => $datos[$i]['precio'],
                            '{cantidad}' => $datos[$i]['cantidad'],
                                '{imagen}' => $datos[$i]['imagen'],
                            '{total}' => $datos[$i]['precio'] * $datos[$i]['cantidad'],
                            
                                    );
                            
                            $newFila = strtr($newFila, $diccionario);
                            $filas .= $newFila;
                            
                            //echo $datos[$i]['imagen'] . ' - ' . $datos[$i]['nombreProducto'] . ' - ' . $datos[$i]['precio'];
                            //echo $datos[$i]['cantidad'];
                            //echo 'Magia: ' . $subtotal;
                            //echo 'Subtotal: ' . $datos[$i]['precio'] * $datos[$i]['cantidad'] . ' Foto: ' . $datos[$i]['imagen'] ;
                        }//fin de for
                        $iva = $subtotal * .16;
                        //$total = ($datos[$i]['cantidad'] * $datos[$i]['precio']) + $total;
                        $total = $subtotal + $iva;
                        
                        $contenido = str_replace($fila, $filas, $contenido);
                        
                        $diccionarioDos = array(
                            '{subtotalGeneral}' => $subtotal,
                                '{iva}' => $iva,
                            '{totalGeneral}' => $total
                        );
                        
                        $contenido = strtr($contenido, $diccionarioDos);
                        
                    }//fin de if
                    else
                    {
                        $contenido = file_get_contents('vista/carrito/carritoVacio.html');
                    }//fin de else
                    
                }//fin de if


                echo $cabecera . $jumbotron . $contenido . $footer;


                break; //fin de ver carrito

            case 'agregar':
                //echo 'accion compra';
                //$this->validacion();
                if (!isset($_SESSION['userName'])) {
                    $cabecera = file_get_contents('vista/header.html');
                    $contenido = file_get_contents('vista/usuario/formulariosPrincipales.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $footer = file_get_contents('vista/footer.html');

                    $diccionario = array(
                        '{usuario}' => $_SESSION['userName']
                    );

                    $cabecera = strtr($cabecera, $diccionario);
                    
                    

                    echo $cabecera . $jumbotron . $contenido . $footer;
                } else if ($_SESSION['tipoUsuario'] == 'cliente') {
                    //flujo de carrito de compra
                    $arreglo= $_SESSION['carrito'];
                    $nombreProducto = "";
                    $precio = 0;
                    $imagen = "";
                    $encontro = false;
                    $numero = 0;
                    for ($i = 0; $i < count($arreglo); $i++) {
                        if($arreglo[$i]['id'] == $_GET['id'])
                        {
                            $encontro = true;
                            $numero = $i;
                            
                        }//fin de if
                    }//fin de for
                    
                    if($encontro == true)
                    {
                        $arreglo[$numero]['cantidad'] = $arreglo[$numero]['cantidad'] +1;
                        $_SESSION['carrito'] = $arreglo;
                        
                        header('Location: http://floval.mx/index.php?control=carrito&accion=verCarrito');
                    }//fin de if encontrado
                    else if($encontro == false)
                    {
                        $miProducto = $this->miProducto->obtener($_REQUEST['id']);
                    
                        
                        $nombreProducto = $miProducto["nombreProducto"];
                        $precio = $miProducto["precio"];
                        $imagen = $miProducto["imagenUno"];
                        $marca = $miProducto["marca"];

                        $arreglo[] = array(
                            'id' => $_GET['id'],
                            'nombreProducto' => $nombreProducto,
                            'precio' => $precio,
                            'imagen' => $imagen,
                            'marca' => $marca,
                            'cantidad' => 1
                        );
                        
                        $_SESSION['carrito'] = $arreglo;
                        
                        header('Location: http://floval.mx/index.php?control=carrito&accion=verCarrito');
                    }
                    
                        
                        
                }//fin de else verificacion cliente

                break;
        }//fin de switch
    }//fin de la funcion ejecutar

    
}

//fin de la clase CarritoControlador