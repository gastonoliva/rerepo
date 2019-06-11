<?php
require_once("helpers.php");
require_once("controladores/funciones.php");
if($_POST){
  $errores = validar($_POST,'Login');
  if(count($errores) == 0){

    $usuario = buscarPorEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]= "Usuario / Contraseña invalidos";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])==false){
      $errores["password"]="Usuario / Contraseña invalidos";
  }else {

    seteoUsuario($usuario,$_POST);
    if(validarAcceso()){
      header("location: index.php");
      exit;
    }else{
      header("location: login.php");
      exit;
    }

  }
}

}
}


 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php require_once("head.php");?>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class= "container-fluid">
      <?php  require_once("header.php");?>
      <section class="marco">
        <article class="col-xs-12">
            <form action="" method="POST" class="px-4 py-3">
              <div class="form-group text-center">
                <h2>Ingresar</h2>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email"
                value="<?=isset($errores['email'])? "":persistir("email") ;?> " placeholder="email@ejemplo.com">
                <span><?= isset($errores["email"])? $errores["email"]: ""; ?></span>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input name="password" type="password" class="form-control" id="password">
                <span><?= isset($errores["password"])? $errores["password"]: ""; ?></span>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input name="recordar" type="checkbox" class="form-check-input" id="recordarme" value="recordar">
                  <label class="form-check-label" for="dropdownCheck">
                    Recordarme
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="registrar.php">Acaso eres nuevo? Registrar</a>
            <a class="dropdown-item" href="#">Olvido su contraseña?</a>
            <br>
        </article>
      </section>
    </div>
<?php require_once("footer.php");?>
  </body>
</html>
