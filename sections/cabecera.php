<header>
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
          <span class="sr-only">Desplegar / Ocultar Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Zapaterias Floval</a>
      </div>
      <!-- Inicia Menu -->
      <div class="collapse navbar-collapse" id="navegacion">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span class="glyphicon glyphicon-gift"></span> Categorias <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Novedades</a></li>
              <li class="divider"></li>
              <li><a href="#">Dama</a></li>
              <li><a href="#">Caballero</a></li>
              <li><a href="#">Niña</a></li>
              <li><a href="#">Niño</a></li>
            </ul>
          </li>

           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              <span class="glyphicon glyphicon-user"></span> Usuario <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="registro.php"><span class="glyphicon glyphicon-plus-sign"></span> Registrarse</a></li>
              <li class="divider"></li>
              <li><a href="formularioIniciar.php"><span class="glyphicon glyphicon-ok-sign"></span> Iniciar Sesión</a></li>
            </ul>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span> Catalogo</a></li>
          <li><a href="carritoCompras.php"><span class="glyphicon glyphicon-shopping-cart"></span> Mi carrito</a></li>
        </ul>

        <form class="navbar-form navbar-right" role="search" action="index.html" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="buscar">
          </div>
          <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </form>
      </div>
    </div>
  </nav>
</header>
