<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Zapaterias Floval</title>
	<link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  	<link rel="stylesheet" href="css/estilosIndex.css">
</head>

<body>

	<?php  
		include('sections/barraNavegacion.php');
		include('sections/jumbotron.php');
		include('sections/sliderPrincipal.php');
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<?php include('sections/muestraProductos.php'); ?>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<?php include('sections/productosPrincipales.php'); ?>
			</div>
		</div>
	</div>
		
		





	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

</body>
</html>