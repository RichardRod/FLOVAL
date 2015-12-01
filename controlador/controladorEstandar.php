<?php

abstract class ControladorEstandar
{

	public static function estaLogueado(){

		if(isset($_SESSION['userName']))
		{
			return true;
		}//fin de if
		else
		{
			return false;
		}//fin de else
	}//fin de la funcion estaLogueado

	public static function esAdministrador(){

		if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 'administrador')
		{
			return true;
		}
		else
		{
			return false;
		}

	}//fin de la funcion esAdministrador

	public static function esCliente(){

		if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}//fin de la funcion esAdministrador

	public static function esEmpleado(){

		if(isset($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 2)
		{
			return true;
		}
		else
		{
			return false;
		}

	}//fin de la funcion esAdministrador



}//fin de la clase ControlEstandar