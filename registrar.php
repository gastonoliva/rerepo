<?php
require_once("helpers.php");
require_once("controladores/funciones.php");
if($_POST){
  $errores = validar($_POST, "registrar");
if (count($errores) == 0) {
  $imagen = armarImagen($_FILES);
  $usuario = armarUsuario($_POST,$imagen);
  guardarUsuario($usuario);
  header("location:Login.php");
        exit;
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="css/index.css">
    <title>Signin</title>
    <?php require_once("head.php");?>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
  <div class= "container-fluid">
  <?php require_once("header.php");?>
<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" class="px-3 py-3">
  <article class="col-xs-12 col-md-4 offset-4">
  <img class="offset-5" src="img/registro.jpg" alt="" width="72" height="72">
<br>
<br>
<section class="marcoReg">
<fieldset>

<!-- Form Name -->
<legend class="offset-4">Crear usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="email">Email de usuario</label>
  <div>
    <input id="email" name="email" type="text" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email@ejemplo.com" class="form-control input-md">
   <span><?= isset($errores["email"])? $errores["email"]: ""; ?></span>

  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="password">Contraseña</label>
  <div>
    <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md">
 <span><?= isset($errores["password"])? $errores["password"]: ""; ?></span>

  </div>
</div>

<!-- rePassword input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="repassword">Confirmar contraseña</label>
  <div>
    <input id="repassword" name="repassword" type="password" placeholder="Confirmar contraseña" class="form-control input-md">
 <span><?= isset($errores["repassword"])? $errores["repassword"]: ""; ?></span>

  </div>
</div>

<!-- File Button -->
<div class="form-group">
 <label class="col-xs-12 control-label" for="filebutton">Insertar foto</label>
 <div>
   <input id="filebutton" name="filebutton" class="input-file" type="file">
   <br>
 </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="singlebutton"></label>
  <div>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary offset-4">Crear usuario</button>
  </div>
</div>

</fieldset>
</form>
</article>
</section>
</div>
<?php require_once("footer.php");?>
</body>
</html>
