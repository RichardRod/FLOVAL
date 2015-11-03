<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosRegistro.css">
  <script src="js/validacionRegistro.js"></script>
</head>
<body>

	<?php
	include('sections/barraNavegacion.php');
	include('sections/jumbotron.php');
	?>

	<div class="container">
		<div class="row">
			<div id="contenedorPrincipal">
				<div id="titulo">
					<h2>Registrarse</h2>
				</div>

				<div id="datos">
					<div>
						<form class="form-horizontal" role="form" method="post" action="" onsubmit="return validar();">
						<div class="form-group">
								<label for="campoUsuario" class="col-lg-2 control-label">Usuario:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="campoUsuario"
									placeholder="Usuario">
								</div>
							</div>
							<div class="form-group">
								<label for="campoNombre" class="col-lg-2 control-label">Nombre:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="campoNombre"
									placeholder="Nombre">
								</div>
							</div>
							<div class="form-group">
								<label for="campoApellido" class="col-lg-2 control-label">Apellido:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="campoApellido"
									placeholder="Apellido">
								</div>
							</div>
							<div class="form-group">
								<label for="campoCorreo" class="col-lg-2 control-label">Email:</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="campoCorreo"
									placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="campoPassword" class="col-lg-2 control-label">Contraseña:</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" id="campoPassword"
									placeholder="Contraseña">
								</div>
							</div>
							<div class="form-group">
								<label for="campoRepetirPassword" class="col-lg-2 control-label">Repite Contraseña:</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" id="campoRepetirPassword"
									placeholder="Repite Contraseña">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<div class="checkbox">
										<label>
										<input type="checkbox"> <a href="#">Acepto Términos y Condiciones</a>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-primary">Registrarse</button>
									<button type="button" class="btn btn-success"><a href="formularioInicio.php"></a>Ya tengo cuenta</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	function valida_envia(){
	   	//valido el nombre
	   	if (document.fvalida.campoNombre.value.length==0){
	      	alert("Tiene que escribir su nombre")
	      	document.fvalida.campoNombre.focus()
	      	return 0;
	   	}
		}
	</script>

	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
</body>
</html>
