<?php
class Validador
{
  private $errores = [];
  public function validarLogin($post, $bd){
      $this->errores["errorLogin"] = '';
      $usuario = trim($post['userName']);
        if (empty($usuario)) {
          $this->errores["errorLogin"] = '<span style="color:red;"> Debe ingresar un nombre de usuario.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
        } else if (!ctype_alnum($usuario)) {
          $this->errores["errorLogin"] = '<span style="color:red;"> El usuario no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
        }else if (strlen($usuario) < 6 ) {
          $this->errores["errorLogin"] = '<span style="color:red;"> El usuario debe contener al menos 6 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
        }else {
          $this->errores["errorLogin"] = '';
        }
      $duplicadoUsuario = $bd->traerPorUsername($_POST['userName']);
      if (!$duplicadoUsuario) {
        $this->errores["errorLogin"] = '<span style="color:red;">Usuario o contraseña incorrectos.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      if (!password_verify($_POST['userPass'], $duplicadoUsuario['password'])) {
        $this->errores["errorLogin"] = '<span style="color:red;">Usuario o contraseña incorrectos.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      return $this->errores;
    }
  public function validarRegistro($post, $files, $bd){
    if (!empty($post['userAge']))
    {
      $fecha = $post['userAge'];
      $strFecha = strtotime($fecha);
      $strFechaActual = strtotime(Date('Y-m-d'));
      $mayor = ($strFechaActual - $strFecha) / 60 / 60 / 24 / 365;
      $fechapost  = explode('-', $fecha);
      if(count($fechapost) == 3){
      if (checkdate($fechapost[1], $fechapost[2], $fechapost[0]))
      {
        if ($mayor >= 18) {
          $this->errores["errorFecha"] = '';
        } else {
          $this->errores["errorFecha"] = '<span style="color:red;">Debe ser mayor de edad para registrarse.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
          }
      } else {
         $this->errores["errorFecha"] = '<span style=color:red;>La fecha ingresada es invalida(El formato debe ser YYYY-MM-DD).</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
    }
    if ($strFecha == false) {
      $this->errores["errorFecha"] = '<span style=color:red;>Debe ser mayor de edad para registrarse.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
    }
    $nombre = trim($post['userFullName']);
    if (empty($nombre)) {
      $this->errores["errorFullName"] = '<span style="color:red;"> Debe ingresar su nombre completo.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else if (strlen($nombre) < 1 ) {
      $this->errores["errorFullName"] = '<span style="color:red;"> Su nombre debe contener al menos un caracter.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (!ctype_alnum(str_replace(' ', '', $nombre))) {
      $this->errores["errorFullName"] = '<span style="color:red;"> No se aceptan caracteres especiales ni numeros.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else {
      $this->errores["errorFullName"] = '';
    }
    if(isset($post['userCountry'])) {
      if($post['userCountry'] == 'default') {
        $this->errores["errorCountry"] = '<span style="color:red;"> Debe seleccionar su país.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      else {
        $this->errores["errorCountry"] = '';
      }
    }
  $usuario = trim($post['userName']);
    if (empty($usuario)) {
      $this->errores["errorUserName"] = '<span style="color:red;"> Debe ingresar un nombre de usuario.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else if (!ctype_alnum($usuario)) {
      $this->errores["errorUserName"] = '<span style="color:red;"> El usuario no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (strlen($usuario) < 6 ) {
      $this->errores["errorUserName"] = '<span style="color:red;"> El usuario debe contener al menos 6 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else {
      $this->errores["errorUserName"] = '';
    }
    if (empty($post['userEmail']))
    {
      $this->errores["errorEmail"] = '<span style="color:red;"> Debe ingresar un correo electrónico.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    else if (filter_var($post['userEmail'], FILTER_VALIDATE_EMAIL))
    {
        $this->errores["errorEmail"] = '';
    }
    else if ((filter_var($post['userEmail'], FILTER_VALIDATE_EMAIL)) === false)
    {
       $this->errores["errorEmail"] = '<span style="color:red;"> Esta dirección de correo "'.($post['userEmail']).'", es inválida.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    if (empty($post['userEmailcheck']))
    {
      $this->errores["errorEmailCheck"] = '<span style="color:red;"> Debe volver a ingresar su correo electrónico.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    else if (filter_var($post['userEmailcheck'], FILTER_VALIDATE_EMAIL))
    {
        $this->errores["errorEmailCheck"] = '';
    }
    else if ((filter_var($post['userEmailcheck'], FILTER_VALIDATE_EMAIL)) === false)
    {
       $this->errores["errorEmailCheck"] = '<span style="color:red;"> Esta dirección de correo "'.($post['userEmail']).'", es inválida.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    if ($post['userEmailcheck'] != $post['userEmail'])
    {
      $this->errores["errorEmailCheck"] = '<span style="color:red;"> Los correos no son iguales, por favor vuelva a ingresar su correo.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    else
    {
      $this->errores["errorEmailCheck"] = '';
    }
  $password  = trim($post['userPass']);
    if (empty($password)) {
      $this->errores["errorPass"] = '<span style="color:red;"> Debe ingresar una contraseña.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else if (!ctype_alnum($password)) {
      $this->errores["errorPass"] = '<span style="color:red;"> La contraseña no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (strlen($post['userPass']) < 6 || strlen($post['userPass']) > 14 ) {
      $this->errores["errorPass"] = '<span style="color:red;"> La contraseña debe contener al menos 6 caracteres y no mas de 14 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    else {
      $this->errores["errorPass"] = '';
    }
    if ($this->errores["errorPass"] == '') {
      if ($post['userPasscheck'] != $post['userPass'])
      {
        $this->errores["errorPassCheck"] = '<span style="color:red;"> Las contraseñas no son iguales, por favor vuelva a ingresarlas.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      else
      {
        $this->errores["errorPassCheck"] = '';
      }
    }else
    {
      $this->errores["errorPassCheck"] = '';
    }
    $allowed =  array('gif','png' ,'jpg', 'jpeg', 'GIF','PNG' ,'JPG', 'JPEG');
    $filename = $files['userAvatar']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext, $allowed) ) {
      $this->errores["errorAvatar"] = '<span style="color:red;"> El formato de la imagen no es valido.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else {
      $this->errores["errorAvatar"] = '';
    }
    // validaciones BD
    $this->errores["errorUserNameRepetido"] = '';
    $this->errores["errorEmailRepetido"] = '';
    $duplicadoUsuario = $bd->traerPorUsername($post['userName']);
    if ($duplicadoUsuario) {
      $this->errores["errorUserNameRepetido"] = '<span style="color:red;">Usuario ya registrado!</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    $duplicadoMail = $bd->traerPorEmail($post['userEmail']);
    if ($duplicadoMail) {
      $this->errores["errorEmailRepetido"] = '<span style="color:red;">Este correo ya esta registrado!</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
if( $files['userAvatar']['error'] === 0 )
    {
      move_uploaded_file($files['userAvatar']['tmp_name'], 'avatars/'.$post['userName'].'.'.$ext);
    }
    return $this->errores;
  }


  public function validarEditarUsuario($post, $files,$bd){

    $nombre = trim($post['userFullName']);
    if (empty($nombre)) {
      $this->errores["errorFullName"] = '<span style="color:red;"> Debe ingresar su nombre completo.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else if (strlen($nombre) < 1 ) {
      $this->errores["errorFullName"] = '<span style="color:red;"> Su nombre debe contener al menos un caracter.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (!ctype_alnum(str_replace(' ', '', $nombre))) {
      $this->errores["errorFullName"] = '<span style="color:red;"> No se aceptan caracteres especiales ni numeros.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else {
      $this->errores["errorFullName"] = '';
    }

    if(isset($post['userCountry'])) {
      if($post['userCountry'] == 'default') {
        $this->errores["errorCountry"] = '<span style="color:red;"> Debe seleccionar su país.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      else {
        $this->errores["errorCountry"] = '';
      }
    }

  $password  = trim($post['userPass']);
    $duplicadoUsuario = $bd->traerPorUsername($_SESSION['logueado']);
    if (empty($password)) {
      $this->errores["errorPass"] = '<span style="color:red;"> Debe ingresar una contraseña.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else if (!ctype_alnum($password)) {
      $this->errores["errorPass"] = '<span style="color:red;"> La contraseña no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (strlen($post['userPass']) < 6 || strlen($post['userPass']) > 14 ) {
      $this->errores["errorPass"] = '<span style="color:red;"> La contraseña debe contener al menos 6 caracteres y no mas de 14 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }else if (!password_verify($_POST['userPass'], $duplicadoUsuario["password"])) {
      $this->errores["errorPass"] = '<span style="color:red;"> Contraseña incorrecta.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    else {
      $this->errores["errorPass"] = '';
    }

    $allowed =  array('gif','png' ,'jpg', 'jpeg', 'GIF','PNG' ,'JPG', 'JPEG');
    $filename = $files['userAvatar']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext, $allowed) ) {
      $this->errores["errorAvatar"] = '<span style="color:red;"> El formato de la imagen no es valido.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else {
      $this->errores["errorAvatar"] = '';
    }

if( $files['userAvatar']['error'] === 0 )
    {
      move_uploaded_file($files['userAvatar']['tmp_name'], 'avatars/'.$_SESSION['logueado'].'.'.$ext);
    }
    return $this->errores;
  }

  public function validarProducto($post, $files, $bd){
    if (empty($_POST['prodName'])) {
      $this->errores["errorProd"] = "Ingrese el nombre del producto!";
    }else{
    $this->errores["errorProd"] = '';
    }
    if (empty($_POST['prodPrecio'])) {
      $this->errores["errorPre"] = "Ingrese el precio del producto!";
    }else{
    $this->errores["errorPre"] = '';
    }
    // if (empty($_POST['prodVal'])) {
    //   $this->errores["errorVal"] = "Ingrese la valoracion del producto!";
    // }else{
    //   $this->errores["errorVal"] = '';
    // }
    if (empty($_POST['prodDesc'])) {
      $this->errores["errorDesc"] = "Ingrese la descripcion del producto!";
    }else{
      $this->errores["errorDesc"] = '';
    }
    if (!isset($_POST['prodSabor'])) {
      $this->errores["errorSabor"] = "Ingrese el sabor del producto!";
    }else{
      $this->errores["errorSabor"] = '';
    }
    $this->errores["errorProductoRepetido"] = '';

    $duplicadoProd = $bd->traerPorProducto($post['prodName']);
    if ($duplicadoProd) {
      $this->errores["errorProductoRepetido"] = '<span style="color:red;">Producto ya registrado!</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    }
    $this->errores["errorImagen"] = '';
    $allowed =  array('gif','png' ,'jpg', 'jpeg', 'GIF','PNG' ,'JPG', 'JPEG');
    $filename = $files['prodImagen']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext, $allowed) ) {
      $this->errores["errorImagen"] = '<span style="color:red;"> El formato de la imagen no es valido.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
    } else {
      $this->errores["errorImagen"] = '';
    }

    if( $files['prodImagen']['error'] === 0 )
    {
      move_uploaded_file($files['prodImagen']['tmp_name'], 'prodImagenes/'.$_POST['prodName'].'.'.$ext);
    }

    return $this->errores;

  }

  public function validarCambioPass($post,$bd){
    $userpass = $bd->traerPorUsername($_SESSION['logueado']);
    $password  = trim($_POST['userPass']);

      if (empty($password)) {
        $this->errores["errorPass"] = '<span style="color:red;"> Debe ingresar una contraseña.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      } else if (!ctype_alnum($password)) {
        $this->errores["errorPass"] = '<span style="color:red;"> La contraseña no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }else if (strlen($post['userPass']) < 6 || strlen($post['userPass']) > 14 ) {
        $this->errores["errorPass"] = '<span style="color:red;"> La contraseña debe contener al menos 6 caracteres y no mas de 14 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }else if (!password_verify($_POST['userPass'], $userpass["password"])) {
        $this->errores["errorPass"] = '<span style="color:red;"> Contraseña incorrecta.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      else {
        $this->errores["errorPass"] = '';
      }
    $newPass = trim($post['userNewPass']);

      if (empty($newPass)) {
        $this->errores["errorNewPass"] = '<span style="color:red;"> Debe ingresar una contraseña.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      } else if (!ctype_alnum($newPass)) {
        $this->errores["errorNewPass"] = '<span style="color:red;"> La contraseña no puede contener caracteres especiales.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }else if (strlen($post['userNewPass']) < 6 || strlen($post['userNewPass']) > 14 ) {
        $this->errores["errorNewPass"] = '<span style="color:red;"> La contraseña debe contener al menos 6 caracteres y no mas de 14 caracteres.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
      }
      else {
        $this->errores["errorNewPass"] = '';
      }
      if ($this->errores["errorPass"] == '') {
        if ($post['userNewPassCheck'] != $post['userNewPass'])
        {
          $this->errores["errorNewPassCheck"] = '<span style="color:red;"> Las contraseñas no son iguales, por favor vuelva a ingresarlas.</span><img style="width:2%;" src="images/wrong.png" alt="Wrong">';
        }
        else{
          $this->errores["errorNewPassCheck"] = '';
        }
      }else{
        $this->errores["errorNewPassCheck"] = '';
      }
      return $this->errores;
  }



}
