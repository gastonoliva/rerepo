<?php
require_once("autoload.php");

if ($_POST) {
  $producto = new Producto($_POST['producto'], $_POST['descripcion'], $_POST['cantidad'], $_POST['precio'], $_FILES,$_POST[$categoria["id"]]);
  $errores = $validar->validacionProducto($producto);
//  if(count($errores)==0){
//Mysql::guardarProducto($pdo, 'productos', $producto);
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
    <title>Nuevo producto</title>
    <?php require_once("head.php");?>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
  <div class= "container-fluid">
  <?php require_once("header.php");?>
<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" class="px-3 py-3">
  <article class="col-xs-12 col-md-4 offset-4">
<br>
<br>
<section class="marcoReg">
<fieldset>

<!-- Form Name -->
<legend class="text-center"><h2>Nuevo producto</h2></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Nombre</label>
  <div>
		<input id="producto" name="producto" type="text" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Descripción</label>
  <div>
		<input id="descripcion" name="descripcion" type="text" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <select class="custom-select">
    <option selected>Selecciona la categoría</option>
    <?php
    $categorias = BaseMYSQL::traerCategorias($pdo);
    foreach ($categorias as $categoria) :?>
      <option value="<?=$categoria["id"];?>"><?=$categoria["categoria"];?></option>
    <?php endforeach;?>
  </select>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Cantidad</label>
  <div>
		<input id="Cantida" name="Cantidad" type="integer" class="form-control input-md" placeholder="En numeros...">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Precio por unidad</label>
  <div>
		<input id="Precio" name="Precio" type="integer" class="form-control input-md" placeholder="En numeros...">
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="filebutton">Insertar foto</label>
  <div>
    <input id="imagen" name="imagen"  class="input-file" type="file">
    <br>
    <span><?= isset($errores["filebutton"])? $errores["filebutton"]: ""; ?></span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="singlebutton"></label>
  <div>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary offset-4">Agregar producto</button>
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
