<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php require_once("head.php");?>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class= "container-fluid">
      <?php  require_once("header.php");?>
      <section class="row">
        <article class="col-xs-12 offset-5">
            <form class="px-4 py-3">
              <div class="form-group text-center">
                <h2>Ingresar</h2>
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                    Recordarme
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Acaso eres nuevo? Registrar</a>
            <a class="dropdown-item" href="#">Olvido su contraseña?</a>
        </article>
      </section>
    </div>
<?php require_once("footer.php");?>
  </body>
</html>
