<?php

session_start();

$control = null;
//$_SESSION['userName'] = null;
//$_SESSION['tipoUsuario'] = -1;
//$_SESSION['carrito'] = null;

switch ($_GET['control']) {

    case 'producto':
        require_once('controlador/productoControlador.php');
        $control = new ProductoControlador();
        break;

    case 'usuario':
        require_once 'controlador/usuarioControlador.php';
        $control = new UsuarioControlador();
        break;

    case 'carrito':
        require_once('controlador/carritoControlador.php');
        $control = new CarritoControlador();
        break;

    case 'categorias':
        require_once('controlador/categoriasControlador.php');
        $control = new CategoriasControlador();

        break;

    case 'sesion':

        require_once('controlador/sesionControlador.php');
        $control = new Sesion();

        break;

    default:

        if (!isset($_SESSION['userName'])) {

            //echo 'No seteada';
            $cabecera = file_get_contents('vista/header.html');
            $array = array('{usuario}' => '');
            $cabecera = strtr($cabecera, $array);
            $jumbotron = file_get_contents('vista/jumbotron.html');
            $contenido = file_get_contents('vista/index/contenido.html');
            $footer = file_get_contents('vista/footer.html');
        }//fin de if
        else {
            
                if ($_SESSION['tipoUsuario'] == 'administrador') {

                    $cabecera = file_get_contents('vista/headerAdministrador.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $contenido = file_get_contents('vista/index/contenido.html');
                    $footer = file_get_contents('vista/footer.html');
                }  
                else if ($_SESSION['tipoUsuario'] == 'cliente') {

                    $cabecera = file_get_contents('vista/hedaerLogueado.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    $contenido = file_get_contents('vista/index/contenido.html');
                    $footer = file_get_contents('vista/footer.html');
                    
                    $diccionario = array(
                        '{usuario}' => $_SESSION['userName'],
                        '{contadorArticulos}' => count($_SESSION['carrito'])
                    );
                    
                    $cabecera = strtr($cabecera, $diccionario);
                    
                    
                }  
                
            
        }//fin de else
        
        

        echo $cabecera . $jumbotron . $contenido . $footer;

        break;
}//fin de switch

if ($control !== null) {
    $control->ejecutar();
    $control = null;
}//fin de if