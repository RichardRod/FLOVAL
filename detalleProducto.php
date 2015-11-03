<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Zapaterias Floval</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilosDetalle.css">

</head>
<body>
  <?php
  include('sections/barraNavegacion.php');
  include('sections/jumbotron.php');
  include('conexion.php');

  $resultado = mysql_query("select * from Producto where id=".$_GET['id']) or die(mysql_error());
  while($elemento = mysql_fetch_array($resultado)) {
  ?>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" >
      <h4 class="text-center"><span class="label label-info"><?php echo $elemento['nombreProducto']; ?></span></h4>
      <!--Inicia el slider -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div id="sliderPrincipal" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#sliderPrincipal" data-slide-to="0" class="active"></li>
            <li data-target="#sliderPrincipal" data-slide-to="1"></li>
            <li data-target="#sliderPrincipal" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" style="width:100%" alt="Primer">
            </div>

            <div class="item">
              <img src="./img/dama/zapatillas/<?php echo $elemento['imagenDos'];?>" style="width:100%" alt="Segundo">
            </div>

            <div class="item">
              <img src="./img/dama/zapatillas/<?php echo $elemento['imagenTres'];?>" style="width:100%" alt="Segundo">
            </div>

          </div>

          <a class="left carousel-control" href="#sliderPrincipal" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#sliderPrincipal" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <!--Fin del slider -->
      <div class="caption">
        <div class="row">
          <div class="col-md-6 col-xs-6">
            <h3><?php echo $elemento['nombreProducto']; ?></h3>
          </div>
          <div class="col-md-6 col-xs-6 price">
            <h3>
              <label>$ <?php echo $elemento['precio']; ?></label></h3>
            </div>
          </div>
          <p><?php echo $elemento['color']; ?></p>
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Compartir</a>
            </div>
            <div class="col-md-6">
              <a href="./detalleProducto.php?id=<?php echo $elemento['id'];?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a></div>
            </div>
            <p> </p>
          </div>
        </div>
      </div>

  <?php
}//fin de while
?>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
