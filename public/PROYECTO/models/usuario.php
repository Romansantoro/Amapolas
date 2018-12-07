<?php
class Usuario
{
  protected $id;
  protected $email;
  protected $password;
  protected $userCountry;
  protected $userName;
  protected $userFullName;
  protected $edad;
  protected $avatar;
  function __construct($email, $password, $username, $userFullName, $edad, $files, $userCountry, $id = NULL){
    if ($id == NULL) {
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    }else {
      $this->password = $password;
    }
    $this->setID($id);
    $this->setUsername($username);
    $this->setEmail($email);
    $this->setEdad($edad);
    $this->setAvatar($files);
    $this->setUserFullName($userFullName);
    $this->setUserCountry($userCountry);
  }
  function getID(){
    return $this->id;
  }
  function setID($id){
    $this->id = $id;
  }
  function getEmail(){
    return $this->email;
  }
  function setEmail($email){
    $this->email = $email;
  }
  function getUserCountry(){
    return $this->userCountry;
  }
  function setUserCountry($userCountry){
    $this->userCountry = $userCountry;
  }
  function getUsername(){
    return $this->username;
  }
  function setUsername($username){
    $this->username = $username;
  }
  function getUserFullName(){
    return $this->userFullName;
  }
  function setUserFullName($userFullName){
    $this->userFullName = $userFullName;
  }
  function getPassword(){
    return $this->password;
  }
  function setPassword($password){
    $this->password = $password;
  }
  function getAvatar(){
    return $this->avatar;
  }
  function setAvatar($files){
    $allowed = array('gif','png' ,'jpg', 'jpeg', 'GIF','PNG' ,'JPG', 'JPEG');
    $filename = $files['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ruta = 'avatars/'.$this->getUsername().'.'.$ext;
    $this->avatar = $ruta;
  }
  function getEdad(){
    return $this->edad;
  }
  function setEdad($edad){
    $this->edad = $edad;
  }
}
