<?php
include_once("autoload.php");

$email="";
if(isset($_SESSION["email"])) {
  $email = $_SESSION["email"];
}
?>
<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/Trading-Post-logo-small.jpg" alt="logotipo" class="navbar-brand" width="100px" height="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <script src="https://kit.fontawesome.com/42c3671e30.js"></script>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"> Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Vehiculos</a>
          <a class="dropdown-item" href="#">Tecnologia</a>
          <a class="dropdown-item" href="#">Deportes y aire libre</a>
          <a class="dropdown-item" href="#">Belleza y cuidado personal</a>
          <a class="dropdown-item" href="#">Libros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Ingresar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrar.php">Registrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">Ayuda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?= $email?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</header>
