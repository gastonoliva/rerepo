<?php
include_once("helpers.php");
include_once("controladores/funciones.php");
if($_POST){

  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"]) == false){
        $errores["password"]="Error en los datos verifique";
      }else{
        seteoUsuario($usuario,$_POST);
        if(validarUsuario()){
          header("location: index.php");
          exit;
        }else{
          header("location: registrar.php");
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
            <form class="px-4 py-3">
              <div class="form-group text-center">
                <h2>Ingresar</h2>
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email</label>
                <input name="email" type="text" class="form-control" id="exampleDropdownFormEmail1" value="<?=isset($errores["email"])? "":persistir("email") ;?>" placeholder="email@ejemplo.com">
                <span><?= isset($errores["email"])? $errores["email"]: ""; ?></span>
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input  name="recordar" type="checkbox" class="form-check-input" id="dropdownCheck">
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
