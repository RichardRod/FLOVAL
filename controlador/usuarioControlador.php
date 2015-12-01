<?php

session_start();

require_once 'controlador/controladorEstandar.php';

class UsuarioControlador extends ControladorEstandar
{
    private $modelo;
    
    public function __construct() {
        require_once 'modelo/usuarioModelo.php';
        $this->modelo = new Usuario();
    }//fin del constructor
    
    public function ejecutar()
    {
        switch($_GET['accion'])
        {
            case 'formulariosPrincipales':
                
                
                $cabecera = file_get_contents('vista/header.html');
                $array = array('{usuario}' => '');
                $cabecera = strtr($cabecera, $array);
                $jumbotron = file_get_contents('vista/jumbotron.html');
                $contenido = file_get_contents('vista/usuario/formulariosPrincipales.html');
                $footer = file_get_contents('vista/footer.html');
                
                echo $cabecera . $jumbotron . $contenido . $footer;
                break;
            
            case 'crudUsuario':
                
                $estaLogueado = ControladorEstandar::estaLogueado();
                $usuarioCliente = ControladorEstandar::esCliente();
                $usuarioAdministrador = ControladorEstandar::esAdministrador();
                $usuarioEmpleado = ControladorEstandar::esEmpleado();
                
                if($estaLogueado != true)
                {
                    echo 'No has iniciado sesion';
                }
                else if($usuarioAdministrador != 'administrador')
                {
                    echo 'No tienes permisisos';
                }
                else if($usuarioAdministrador == 'administrador')
                {
                    $cabecera = file_get_contents('vista/headerAdministrador.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    echo 'Crud de usuario';
                    $footer = file_get_contents('vista/footer.html');
                
                    echo $cabecera . $jumbotron . $footer;
                }
                
                
                
                break;
                
            case 'singleUsuario':
                    $cabecera = file_get_contents('vista/hedaerLogueado.html');
                    $jumbotron = file_get_contents('vista/jumbotron.html');
                    //$contenido = file_get_contents('vista/usuario/singleUsuario.html');
                    $footer = file_get_contents('vista/footer.html');
                    
                    $diccionario = array(
                        '{usuario}' => $_SESSION['userName'],
                        '{contadorArticulos}' => count($_SESSION['carrito'])
                    );
                    
                    $cabecera = strtr($cabecera, $diccionario);
                
                echo $cabecera . $jumbotron . $contenido . $footer;
                break;
            
            
        }//fin de switch
        
    }//fin de la funcion ejecutar
    
    
}//fin de la clase UsuarioControlador
