<?php
class Producto{
 private $producto;
 private $descripcion;
 private $cantidad;
 private $precio;
 private $imagen;
 private $categoria_id;

 public function __construct ($producto, $descripcion, $cantidad = 1, $precio, $imagen,$categoria_id){
   $this->producto=$producto;
   $this->descripcion=$descripcion;
   $this->cantidad=$cantidad;
   $this->precio=$precio;
   $this->imagen=$imagen;
   $this->categoria_id=$categoria_id;
 }
 public function getProducto () {
   return $this->producto;
 }
 public function setProducto ($producto){
   $this->producto = $producto;
 }

 public function getDescripcion () {
   return $this->descripcion;
 }
 public function setDescripcion ($descripcion){
   $this->descripcion = $descripcion;
 }

 public function getCantidad () {
   return $this->cantidad;
 }
 public function setCantidad ($cantidad){
   $this->cantidad = $cantidad;
 }

 public function getPrecio () {
   return $this->precio;
 }
 public function setPrecio ($precio){
   $this->precio = $precio;
 }

 public function getImagen () {
   return $this->imagen;
 }
 public function setImagen ($imagen){
   $this->imagen = $imagen;
 }
 public function getCategoria_id () {
   return $this->categoria_id;
 }
 public function setCategoria_id ($categoria_id){
   $this->categoria_id = $categoria_id;
 }
}
?>
