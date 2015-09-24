<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosRegistro.css">
  </head>
  <body>
    <section id="Registro">
      <p id="formTitle">Registro</p>
      <form class="RegistroPrincipal" action="index.html" method="post">

      <label for="usuario">Usuario</label>
      <input id="usuario" type="text" name="usuario" placeholder="usuario">

      <label for="email">Email</label>
      <input id="email" type="email" name="email" placeholder="email">

      <label for="contraseña">Contraseña</label>
      <input id="contraseña" type="text" name="contraseña" placeholder="contraseña">

      <label for="confrimaContraseña">Confirme su Contraseña</label>
      <input id="confirmaContraseña" type="text" name="confirmaContrseña" placeholder="confirma la contraseña">

      <label for="nombre">Nombre</label>
      <input id="nombre" type="text" name="nombre" placeholder="nombre">

      <label for="apellido">Apellido</label>
      <input id="apellido" type="text" name="apellido" placeholder="apellido">

      <input type="button" name="registrarme" value="Registrarme">

      </form>
  </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
