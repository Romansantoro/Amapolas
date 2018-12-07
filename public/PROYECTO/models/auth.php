<?php

class Auth
{

  public function __construct(){
    session_start();
  }

  public function loguear($userName){
    $_SESSION['logueado'] = $userName;
  }

  public function estaLogueado(){
    return isset($_SESSION['logueado']);
  }

  public function logout(){
    setcookie('logueado', NULL, time()-1);
    session_destroy();
  }

  public function recordame($username){
    setcookie('logueado', $username, time()+3600);
  }

  public function usuarioLogueado($bd){
    if ($this->estaLogueado()) {
      $usuario = $bd->traerPorUsername($_SESSION['logueado']);
      return $usuario;
    } else {
      return NULL;
    }
  }


}
