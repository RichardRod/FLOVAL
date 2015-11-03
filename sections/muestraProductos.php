<link rel="stylesheet" href="css/estilosMuestraProductos.css">

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3 id="populares"><strong>Los más populares</strong></h3>
            </div>
            <div class="col-md-3">
                <!-- Controles -->
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div> <!-- Controles y cabecera -->

       


        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">

                     <!-- Conexion con la base de datos -->
                    <?php include('conexion.php');
                        $resultado = mysql_query("SELECT * FROM Producto LIMIT 4") or die(mysql_error());

                        while($elemento = mysql_fetch_array($resultado)){

                    ?>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5><?php echo $elemento['nombreProducto']; ?></h5>
                                            <h5 class="price-text-color">$ <?php echo $elemento['precio']; ?></h5>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Agregar</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Detalles</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }//fin de while ?>
                    </div>
                </div><!--Primera parte Activa -->

                <div class="item">
                    <div class="row">
                    <!-- Conexion con la base de datos -->
                    <?php include('conexion.php');
                        $resultado = mysql_query("SELECT * FROM Producto LIMIT 4") or die(mysql_error());

                        while($elemento = mysql_fetch_array($resultado)){

                    ?>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5><?php echo $elemento['nombreProducto']; ?></h5>
                                            <h5 class="price-text-color">$ <?php echo $elemento['precio']; ?></h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Agregar</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Detalles</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }//fin de while ?>
                    </div>
                </div>
            </div><!-- Clase Carousel -->
        </div><!--Primer Slider -->
    </div> <!-- Primera Seccion -->




    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3 id="populares"><strong>Promociones de temporada</strong></h3>
            </div>
            <div class="col-md-3">
                <!-- Controles -->
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                    <!-- Conexion con la base de datos -->
                    <?php include('conexion.php');
                        $resultado = mysql_query("SELECT * FROM Producto LIMIT 3") or die(mysql_error());

                        while($elemento = mysql_fetch_array($resultado)){

                    ?>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5><?php echo $elemento['nombreProducto']; ?></h5>
                                            <h5 class="price-text-color">$ <?php echo $elemento['precio']; ?></h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Agregar</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Detalles</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }//fin de while ?>
             
                    </div>
                </div> <!-- Primera parte activa -->

                <div class="item">
                    <div class="row">
                    <!-- Conexion con la base de datos -->
                    <?php include('conexion.php');
                        $resultado = mysql_query("SELECT * FROM Producto LIMIT 3") or die(mysql_error());

                        while($elemento = mysql_fetch_array($resultado)){

                    ?>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="./img/dama/zapatillas/<?php echo $elemento['imagenUno'];?>" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5><?php echo $elemento['nombreProducto']; ?></h5>
                                            <h5 class="price-text-color">$ <?php echo $elemento['precio']; ?></h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }//fin de while ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Fin de la clase Contenedor -->
