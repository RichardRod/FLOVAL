<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilosBarraNavegacion.css">

<nav class="navbar navbar-default">
<div class="container">
    <div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img src="img/logoZapateria.ico" class="img-responsive" width="50" height="50"></a>
	</div>
	
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
			 <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
             <li><a href="catalogo.php"><span class="glyphicon glyphicon-star"></span> Catalogo</a></li>
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorías <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
				
				<ul class="dropdown-menu mega-dropdown-menu row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Novedades</li>                            
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="img/productoUno.jpg" class="img-responsive" alt="producto 1"></a>
                                    <h4><small>El mejor calzado</small></h4>                                        
                                    <button class="btn btn-primary" type="button">499.99 $</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="img/productoDos.jpg" class="img-responsive" alt="producto 2"></a>
                                    <h4><small>La mejor calidad</small></h4>                                        
                                    <button class="btn btn-primary" type="button">599.99 $</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="img/productoTres.jpg" class="img-responsive" alt="producto 3"></a>
                                    <h4><small>Para todos</small></h4>                                        
                                    <button class="btn btn-primary" type="button">799.99 $</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-eye-open"></span> Ver</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="todasCategorias.php">Todas las categorias <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Damas</li>
							<li class="divider"></li>
							<li><a href="#">Zapatilla</a></li>
							<li><a href="#">Sandalia</a></li>
							<li><a href="#">Flat</a></li>
							<li><a href="#">Bota</a></li>
							<li><a href="#">Deportivo</a></li>
							<li><a href="#">Pantufla</a></li>
							<li><a href="#">Sneaker</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Caballeros</li>
							<li class="divider"></li>
							<li><a href="#">Sandalia</a></li>
							<li><a href="#">Flat</a></li>
							<li><a href="#">Bota</a></li>
							<li><a href="#">Deportivo</a></li>
							<li><a href="#">Pantufla</a></li>
							<li><a href="#">Sneaker</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Infantil</li>
							<li class="divider"></li>
							<li><a href="#">Calzado para niñas</a></li>
							<li><a href="#">Calzado para niños</a></li>
													
							<li class="divider"></li>
                            <li class="dropdown-header">Encontrar</li>
                            <form class="form" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="email">Encontrar</label>
                                <input type="text" class="form-control" id="email" placeholder="Buscar">                                                              
                              </div>
                              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-search"></span></button>
                            </form>                                                       
						</ul>
					</li>
				</ul>
				
			</li>
		</ul>

		   <form class="navbar-form navbar-left" role="search" action="index.html" method="post">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Buscar">
                <div class="form-group">
                  <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="bottom" title="Realizar busqueda">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </div>

              </div>
            </form>

		           <ul class="nav navbar-nav navbar-right">
              <li><a href="carritoCompras.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
              <li><a href="carritoCompras.php"><span class="glyphicon glyphicon-plus-sign"></span> Registrarse</a></li>
              <li><a href="carritoCompras.php"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
            
            
            </ul>
		
	</div><!-- /.nav-collapse -->
	</div>
</nav>
