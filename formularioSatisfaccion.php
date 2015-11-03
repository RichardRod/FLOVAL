<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosSatisfaccion.css">
  <script src="js/validacionSatisfaccion.js"></script>
</head>
<body>

	<?php
	include('sections/header.php');
	?>

	<div class="container">
		<div class="row">
			<div id="contenedorPrincipal">
				<div id="titulo">
					<h2>Ayudenos a mejorar</h2>
				</div>

				<div id="datos">
					<div>
						<form class="form-horizontal" role="form" method="post" action="" onsubmit="return validar();">
						<div class="form-group">
								<label for="Novedades" class="col-lg-2 control-label">Califique del 1 al 10 la forma en que se presentan las novedades</label>
								<div class="col-lg-10">
									<select name="comboUno" id="comboUno" >
                      <option value="0">Seleccione...</option>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
  										<option value="7">7</option>
  										<option value="8">8</option>
  										<option value="9">9</option>
  										<option value="10">10</option>

									</select>


								</div>
							</div>
							<div class="form-group">
								<label for="Categorias" class="col-lg-2 control-label">Califique la forma en que se presentan las Categorias</label>
								<div class="col-lg-10">
										<select id="comboDos">
											<option value="0">Seleccione...</option>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
  										<option value="7">7</option>
  										<option value="8">8</option>
  										<option value="9">9</option>
  										<option value="10">10</option>

										</select>

								</div>
							</div>
							<div class="form-group">
								<label for="Precios" class="col-lg-2 control-label">¿Que opina de nuestros Precios?</label>
								<div class="col-lg-10">
									<select id="comboTres">
											<option value="0">Seleccione...</option>
  										<option value="barato">Baratos</option>
  										<option value="accesibles">Accesibles</option>
  										<option value="normales">Normales</option>
  										<option value="altos">Altos</option>


										</select>
								</div>
							</div>
							<div class="form-group">
								<label for="Calidad" class="col-lg-2 control-label">Califique la calidad de nuestros Productos</label>
								<div class="col-lg-10">
									<select id="comboCuatro">
											<option value="0">Seleccione...</option>
										  <option value="mala">Mala</option>
  										<option value="regular">Regular</option>
  										<option value="buena">Buena</option>
  										<option value="excelente">Excelente</option>
  									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="Envio" class="col-lg-2 control-label">Califique nuestra capacidad de Envio</label>
								<div class="col-lg-10">
									<select id="comboCinco">
											<option value="0">Seleccione...</option>
											<option value="mala">Mala</option>
  										<option value="regular">Regular</option>
  										<option value="buena">Buena</option>
  										<option value="excelente">Excelente</option>
  									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="Modelos" class="col-lg-2 control-label">¿Siempre encuentra los modelos que busca?</label>
								<div class="col-lg-10">
									<select id="comboSeis">
										  <option value="0">Seleccione...</option>
 											<option value="nunca">Nunca</option>
  										<option value="aveces">A veces</option>
  										<option value="csiempre">Casi Siempre</option>
  										<option value="siempre">Siempre</option>
  									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">

									<button type="submit" class="btn btn-success"><a href="formularioInicio.php"></a>Enviar</button>

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
