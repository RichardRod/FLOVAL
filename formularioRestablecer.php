<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Restablecer Contraseña</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosRestablecer.css">

</head>
<body>

	<?php 
	include('sections/header.php');

	?>

	<div class="container">
		<div class="row">
			<div id="contenedorPrincipal">
				<div id="titulo">
					<h2>Restablecer Contraseña</h2>
				</div>

				<div id="datos">
					<div>
						<form class="form-horizontal" role="form" method="post" action="registro.php">
						<div class="form-group">
								<label for="campoCorreo" class="col-lg-2 control-label">Correo:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="campoCorreo" 
									placeholder="Correo Electronico">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-primary">Enviar</button>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>