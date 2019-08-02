<?php

class Mysql extends BaseDato{
  static public function conexion($host,$db_nombre,$usuario,$password,$puerto,$charset){
          try {
              $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";"."charset=".$charset;
              $baseDatos = new PDO($dsn,$usuario,$password);
              $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              return $baseDatos;
          } catch (PDOException $errores) {
              echo "No me pude conectar a la BD ". $errores->getmessage();
              exit;
          }
      }
static public function guardarProducto($pdo, $tabla, $producto){
  $sql = "insert into $tabla (nombre, descripcion) values (:nombre, :descripcion)";
  $query = $pdo->prepare($sql);
  $query->bindValue('producto', $producto->getProducto());
  $query->bindValue('descripcion', $producto->getDescripcion());
  $query->bindValue('cantidad', $producto->getCantidad());
  $query->bindValue('precio', $producto->getPrecio());
  $query->bindValue('imagen', $producto->getImagen());
  $query->execute();
}

public function leer(){

}
public function editar(){

}
public function eliminar(){

}

}


 ?>
