<?php
class Producto{
  protected $id;
  protected $nombre;
  protected $precio;
  protected $valoracion;
  protected $descripcion;
  protected $sabor;
  protected $imagen;

  function __construct($nombre, $precio, $descripcion, $sabor, $files, $id = NULL){
    $this->setID($id);
    $this->setNombre($nombre);
    $this->setPrecio($precio);
    $this->setDescripcion($descripcion);
    $this->setSabor($sabor);
    $this->setImagen($files);
  }
  function getID(){
    return $this->id;
  }
  function setID($id){
    $this->id = $id;
  }
  function getNombre(){
    return $this->nombre;
  }
  function setNombre($nombre){
    $this->nombre = $nombre;
  }
  function getPrecio(){
    return $this->precio;
  }
  function setPrecio($precio){
    $this->precio = $precio;
  }
  function getValoracion(){
    return $this->valoracion;
  }
  function setValoracion($username){
    $this->valoracion = $valoracion;
  }
  function getDescripcion(){
    return $this->descripcion;
  }
  function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
  }
  function getSabor(){
    return $this->sabor;
  }
  function setSabor($sabor){
    $this->sabor = $sabor;
  }
  function getImagen(){
    return $this->imagen;
  }
  function setImagen($files){
    $allowed = array('gif','png' ,'jpg', 'jpeg', 'GIF','PNG' ,'JPG', 'JPEG');
    $filename = $files['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ruta = 'prodImagenes/'.$this->getNombre().'.'.$ext;
    $this->imagen = $ruta;
  }
}
