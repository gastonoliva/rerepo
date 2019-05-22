<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin</title>
    <?php require_once("head.php");?>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <div class= "container-fluid">
  <?php require_once("header.php");?>
  <section class="row">
    <article class="col-xs-12 offset-5">
        <form class="px-4 py-3">
    <body class="text-center" cz-shortcut-listen="true">
      <form class="form-signin">
        <img class="mb-4" src="img/registro.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Crear usuario</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
        <label for="inputPassword" class="sr-only">Confirmar contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirmar contraseña" required="">
        <div class="checkbox mb-3"><br>
    <label>
      <input type="checkbox" value="remember-me"> Recordar
    </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Crear Usuario</button>
      </form>
    </article>
  </section>
  </div>
</body>
<?php require_once("footer.php");?>
</html>
