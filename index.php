<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Zapaterias Floval</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<?php
	    include('sections/cabecera.php');
		include('sections/jumbotron.php');
	     ?>
	<!-- Jumbotron -->

	<section class="container">

		<section class="main row">

			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">

		<div id="sliderPrincipal" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#sliderPrincipal" data-slide-to="0" class="active"></li>
				<li data-target="#sliderPrincipal" data-slide-to="1"></li>
    		<li data-target="#sliderPrincipal" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="img/imagenUno.jpg" style="width:100%" alt="Primer">
					<div class="container">
						<div class="carousel-caption">
							<h1>Slider 1</h1>
							<p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
          		<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>

				<div class="item">
					<img src="img/imagenDos.jpg" style="width:100%" alt="Segundo">
					<div class="container">
						<div class="carousel-caption">
							<h1>Slider 2</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
          		<p><a class="btn btn-lg btn-success" href="#" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="img/imagenTres.jpg" style="width:100%" alt="Segundo">
					<div class="container">
						<div class="carousel-caption">
							<h1>Slider 3</h1>
							<p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
          <p><a class="btn btn-lg btn-success" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
			</div>

			<a class="left carousel-control" href="#sliderPrincipal" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#sliderPrincipal" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
</div>

			<div id="intereses" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</section>

	</section>

	<section class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="color1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	</section>

		<section class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="color1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<p>
				<h3>Columna</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	</section>

	<section class="container">
		<div class="row">
			<div class="col-xs-6">
				<h1>Uno</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="col-xs-6">
				<h1>Dos</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Algo</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row">
			

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
				<ul>
	              <li><a href="http://www.facebook.com">Zapatos</a></li>
	              <li><a href="http://www.facebook.com">Tenis</a></li>
	              <li><a href="http://www.facebook.com">Botas</a></li>
            	</ul>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
				<ol type="A">
		            <li><a href="http://www.facebook.com">Caballero</a></li>
		            <li><a href="http://www.facebook.com">Dama</a></li>
		            <li><a href="http://www.facebook.com">Niño</a></li>
		            <li><a href="http://www.facebook.com">Niña</a></li>
          		</ol>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
				<ol>
		            <li><a href="http://www.facebook.com">Primavera</a></li>
		            <li><a href="http://www.facebook.com">Verano</a></li>
		            <li><a href="http://www.facebook.com">Otoño</a></li>
		            <li><a href="http://www.facebook.com">Invierno</a></li>
          		</ol>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
				 <ul >
		            <li><a href="http://www.facebook.com">Accesorios</a></li>
		            <li><a href="http://www.facebook.com">Varios</a></li>
		            <li><a href="http://www.facebook.com">Más</a></li>
          		</ul>
			</div>

		</div>
	</section>




	<?php include('sections/piePagina.php'); ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
