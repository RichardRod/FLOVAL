<?php
    $servidor ="db595391005.db.1and1.com";
    $usuario = "dbo595391005";
    $password = "jardinguadalajara";
    $baseDatos = "db595391005";


    $conexion = mysql_connect($servidor, $usuario, $password) or die("No se pudo establecer conexion");
    $seleccionarBaseDatos = mysql_select_db($baseDatos, $conexion) or die("La base de datos no existe");

?>
