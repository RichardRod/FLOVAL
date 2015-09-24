<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosIniciar.css">
  </head>
<body>
	<?php include('sections/cabecera.php') ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<h1>Iniciar Sesión</h1>

				<form>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" class="form-control" placeholder="Escribe tu usuario">
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-option-horizontal"></span></span>
							<input type="password" class="form-control" placeholder="Escribe tu contraseña">
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>


	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>