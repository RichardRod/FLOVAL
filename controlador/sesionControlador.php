<?php

session_start();

require_once 'controlador/controladorEstandar.php';

class Sesion extends ControladorEstandar {

    private $modelo;
    
    public function __construct() {
        require_once 'modelo/usuarioModelo.php';
        $this->modelo = new Usuario();
    }//fin del constructor
    
    public function ejecutar() {
        switch ($_GET['accion']) {
            
            case 'registrarse':
                $this->registro();
                
                header("Location: http://floval.mx/index.php");
                break;


            case 'iniciar':
                $busquedaUsuario = $_POST['txtUsuario'];
                $busquedaPassword = $_POST['txtPassword'];
                
                
                $usuario = $this->modelo->obtener($busquedaUsuario);
                
                
                if ($_POST['txtUsuario'] == "Ricardo" && $_POST['txtPassword'] == "123") {
                    session_start();

                    //declaracion de variables
                    $_SESSION['userName'] = $_POST["txtUsuario"];
                    $_SESSION['tipoUsuario'] = 'administrador';

                    header("Location: http://floval.mx/index.php");
                }//fin de if
                else if($busquedaUsuario == $usuario["nombreUsuario"] && $busquedaPassword == $usuario["passUsuario"])
                {
                    session_start();
                    //echo 'Entro el cliente';
                    $_SESSION['userName'] = $_POST["txtUsuario"];
                    $_SESSION['tipoUsuario'] = $usuario['tipoUsuario'];
                    $_SESSION['carrito'] = null;

                    header("Location: http://floval.mx/index.php");
                }
                else {
                    echo 'Error';
                }

                break;

            case 'salir':

                session_start();
                session_unset();
                session_destroy();

                setcookie(session_name() . '', time() - 3600);

                header("Location: http://floval.mx/index.php");

                break;
        }//fin de switch
    }//fin de la funcion ejecutar
    
    private function registro()
    {
        $miUsuario = new Usuario();
        
        $miUsuario->nombreUsuario = $_POST['txtUserName'];
        $miUsuario->nombre = $_POST['txtNombre'];
        $miUsuario->apellido = $_POST['txtApellido'];
        $miUsuario->tipoUsuario = 'cliente';
        $miUsuario->correoElectronico = $_POST['txtCorreo'];
        $miUsuario->passUsuario = $_POST['txtPassword'];
        //var_dump($nombreUsuario);
        $nombreUsuario = $miUsuario->nombreUsuario;
        
        $verificacion = $this->modelo->obtener($nombreUsuario);
        if($verificacion["nombreUsuario"] == $nombreUsuario)
        {
            echo 'Ya existe';
        }//fin de if
        else
        {
            $this->modelo->insertar($miUsuario);
            header("Location: http://floval.mx/index.php");
        }
    }//fin de la funcion registro

}
