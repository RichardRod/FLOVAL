<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosRegistro.css">
  </head>
  <body>

    <?php
        include('sections/cabecera.php');
    ?>


<div class="container">

  <form class="form-horizontal" role="form" action="registro.php.html" method="post">


       <div class="form-group">
           <label for="usuario" class="control-label col-xs-2">Usuario:</label>
           <div class="col-xs-10">
               <input type="text" id="usuario" class="form-control" placeholder="Escribe tu usuario">
           </div>
       </div>
       <div class="form-group">
           <label for="nombre" class="control-label col-xs-2">Nombre:</label>
           <div class="col-xs-10">
               <input type="text" id="nombre" class="form-control" placeholder="Escribe tu nombre">
           </div>
       </div>
       <div class="form-group">
           <label for="usuario" class="control-label col-xs-2">Apellido:</label>
           <div class="col-xs-10">
               <input type="text" id="usuario" class="form-control" placeholder="Escribe tu apellido">
           </div>
       </div>
       <div class="form-group">
           <label for="correo" class="control-label col-xs-2">Correo:</label>
           <div class="col-xs-10">
               <input type="email" id="correo" class="form-control" placeholder="Escribe tu correo">
           </div>
       </div>
       <div class="form-group">
           <label for="contra" class="control-label col-xs-2">Contraseña:</label>
           <div class="col-xs-10">
               <input type="password" id="contra" class="form-control" placeholder="Selecciona contraseña">
           </div>
       </div>
       <div class="form-group">
           <label for="Confirmarcontra" class="control-label col-xs-2">Confirmar Contraseña:</label>
           <div class="col-xs-10">
               <input type="password" id="Confirmarcontra" class="form-control" placeholder="Vuelve a escribir tu contraseña">
           </div>
       </div>
       <div class="form-group">
           <div class="col-xs-offset-2 col-xs-10">
               <button type="submit" class="btn btn-lg btn-success">Enviar</button>
           </div>
       </div>

  </form>

</div>

  <?php include('sections/piePagina.php') ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
