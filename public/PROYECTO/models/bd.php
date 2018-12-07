<?php

class BD{

  private  $dsn = 'mysql:host=localhost;dbname=Amapolas';
  private  $user = 'root';
  private  $pass = '';
  private  $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  private  $conex;

  public function __construct(){

    try{

        $this->conex = new PDO($this->dsn, $this->user, $this->pass, $this->opt);

    }catch( PDOException $ex ){

        echo 'El error es -> '. $ex->getMessage();
    }
  }

  public function getConex(){
    return $this->conex;
  }

  public function traerPorUsername($username) {
    $query = $this->conex->prepare('SELECT * FROM usuarios WHERE nombredeusuario = :nombredeusuario');
    $query->bindValue(":nombredeusuario", $username);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    return $usuario;
  }

  // public function traerUserComoObj($username) {
  //   $query = $this->conex->prepare('SELECT * FROM usuarios WHERE nombredeusuario = :nombredeusuario');
  //   $query->bindValue(":nombredeusuario", $username);
  //   $query->execute();
  //   $query->setFetchMode(PDO::FETCH_CLASS, 'usuario');
  //   $usuario = $query->fetch();
  //   return $usuario;
  // }


  public function traerPorEmail($email) {
    $query = $this->conex->prepare('SELECT * FROM usuarios WHERE email = :email');
    $query->bindValue(":email", $email);
    $query->execute();
    $usuario = $query->fetch();
    return $usuario;
  }

  public function traerPorProducto($prod) {
    $query = $this->conex->prepare('SELECT * FROM productos WHERE nombre = :nombre');
    $query->bindValue(":nombre", $prod);
    $query->execute();
    $producto = $query->fetch();
    return $producto;
  }

  public function traerTodos(){
    $query = $this->conex->query("SELECT * FROM usuarios");
    $usuarios = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
    return $usuarios;

  }


  public function guardarUsuario(Usuario $objeto) {

      $insert = $this->conex->prepare('INSERT INTO usuarios (nombre, nombredeusuario, email, avatar, password, nacionalidad, edad)
      VALUES (:userFullName, :userName, :email, :avatar, :password, :userCountry, :edad)');
      $insert->bindValue(':userFullName', $objeto->getUserFullName());
      $insert->bindValue(':userName', $objeto->getUsername());
      $insert->bindValue(':email', $objeto->getEmail());
      $insert->bindValue(':avatar', $objeto->getAvatar());
      $insert->bindValue(':password', $objeto->getPassword());
      $insert->bindValue(':userCountry', $objeto->getUserCountry());
      $insert->bindValue(':edad', $objeto->getEdad());
      $insert->execute();
      $id = $this->conex->lastInsertId();
      $objeto->setID($id);
  }

  public function guardarProd(Producto $prod) {

      $insert = $this->conex->prepare('INSERT INTO productos (nombre, precio, descripcion, sabor, imagen)
      VALUES (:nombre, :precio, :descripcion, :sabor, :imagen)');
      $insert->bindValue(':nombre', $prod->getNombre());
      $insert->bindValue(':imagen', $prod->getImagen());
      $insert->bindValue(':precio', $prod->getPrecio());
      $insert->bindValue(':descripcion', $prod->getDescripcion());
      $insert->bindValue(':sabor', $prod->getSabor());
      $insert->execute();
      $id = $this->conex->lastInsertId();
      $prod->setID($id);
  }


  public function modificarUsuario($usuariobj) {

      $insert = $this->conex->prepare('UPDATE usuarios SET nombre =:nombre, avatar=:userAvatar, nacionalidad=:userCountry WHERE nombredeusuario=:userName');
      $insert->bindValue(':nombre', $usuariobj->getUserFullName());
      $insert->bindValue(':userAvatar', $usuariobj->getAvatar());
      $insert->bindValue(':userCountry', $usuariobj->getUserCountry());
      $insert->bindParam(':userName', $_SESSION['logueado']);
      $insert->execute();
  }

   public function guardarNuevaPass($usuariobj){
     $insert = $this->conex->prepare('UPDATE usuarios SET password=:userPass WHERE nombredeusuario=:userName');
     $insert->bindValue(':userPass', $usuariobj->getPassword());
     $insert->bindParam(':userName', $_SESSION['logueado']);
     $insert->execute();
   }
 }
