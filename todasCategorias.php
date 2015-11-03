<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Categorias</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilosCategorias.css">
  
</head>
<body>

  <?php
  include('sections/barraNavegacion.php');
  include('sections/jumbotron.php');
  ?>

  <div class="col-xs-12">
    <div class="card hovercard">
      <div class="card-background">
        <!--<img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">-->
        <img src="img/portadaCategorias" id="portada">
      </div>
      <div class="useravatar">
        <!--<img alt="" src="http://lorempixel.com/100/100/people/9/">-->
      </div>
      <div class="card-info"> <span class="card-title">Calzado para Dama</span>

      </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
          <div class="hidden-xs">Dama</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
          <div class="hidden-xs">Caballero</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          <div class="hidden-xs">Niñas</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
          <div class="hidden-xs">Niños</div>
        </button>
      </div>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
              <div id="filtrosBusqueda">

                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="opcionMarca">Marca:</label>
                    <select class="form-control" id="opcionMarca" onchange="filtroMarca()">
                      <option>Seleccione marca</option>
                      <option>Addidas</option>
                      <option>Nike</option>
                      <option>Reebok</option>
                      <option>Pirma</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="opcionColor">Color:</label>
                    <select class="form-control" id="opcionColor" onchange="filtroColor()">
                      <option>Seleccione color</option>
                      <option>Azul</option>
                      <option>Verde</option>
                      <option>Negro</option>
                      <option>Rojo</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="opcionTipo">Tipo:</label>
                    <select class="form-control" id="opcionTipo" onchange="filtroTipo()">
                      <option>Seleccione tipo</option>
                      <option>Zapatilla</option>
                      <option>Sandalia</option>
                      <option>Flat</option>
                      <option>Bota</option>
                      <option>Deportivo</option>
                      <option>Pantufla</option>
                      <option>Sneaker</option>
                      
                    </select>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="opcionMarca">Talla:</label>
                    <select class="form-control" id="opcionMarca">
                      <option>Seleccione Talla</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="buscar">Filtrar:</label>
                  <input type="text" class="form-control" id="buscar" placeholder="Buscar"> 
                </div>
              </div>
                <?php
                include('conexion.php'); //Establecer conexion con la base de datos

                $resultado = mysql_query("SELECT * FROM Producto WHERE tipo='Zapatilla'") or die(mysql_error());

                while($elemento = mysql_fetch_array($resultado))
                {
                ?>

                <div class="col-sm-6 col-md-4">
                <div class="elementoZapato">
                <div class="<?php echo $elemento['marca'];?> <?php echo $elemento['color'];?> <?php echo $elemento['tipo'];?>">
                  <div class="thumbnail " >
                    <h4 class="text-center"><span class="label label-info"><?php echo $elemento['nombreProducto']; ?></span></h4>
                    <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" class="img-responsive">
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
                            <a href="./detalleProducto.php?id=<?php echo $elemento['id'];?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-search"></span> Ver</a></div>
                          </div>
                          <p> </p>
                        </div>
                      </div>
                      </div>
                      </div>
                    </div><!--Fin seccion zapatillas -->
                    <?php
                  }//fin de while
                    ?>



                  </div>

                </div>
              </div>
            </div> <!-- Dama section -->
            <div class="tab-pane fade in" id="tab2">
              <h3>Caballero</h3>
            </div>
            <div class="tab-pane fade in" id="tab3">
              <h3>Niñas</h3>
            </div>
            <div class="tab-pane fade in" id="tab4">
              Niños
            </div>
          </div>
        </div>

      </div>



      <script src="js/vendor/jquery.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/filtrosTodasCategorias.js"></script>
    </body>
    </html>
