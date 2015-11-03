<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosInicio.css">
  <script src="js/validacionInicioSesion.js"></script>
</head>
<body>

	<?php
	include('sections/header.php');

	?>

	 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" unsubmit="return validar();">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="campoCorreo" class="form-control" placeholder="Correo Electronico" required autofocus>
                <input type="password" id="campoPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="recordarme"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
            </form>
            <a href="formularioRestablecer.php" class="forgot-password">
                Olvidaste tu contraseña?
            </a>
        </div>
    </div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
