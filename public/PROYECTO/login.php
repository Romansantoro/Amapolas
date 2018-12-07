<?php

require_once 'models/autoload.php';

 if ($_POST) {
  $errores = $validador->validarLogin($_POST, $bd);
  if(!array_filter($errores)){
    $bd->traerPorUsername($_POST['userName']);
    if ($errores["errorLogin"] == '') {
      $auth->loguear($_POST['userName']);
      if (isset($_POST['recordar'])) {
        $auth->recordame($_POST['userName']);
      }
      header('Location: profile.php?userName='.$_POST['userName']);
    }
  }
}
  if ($auth->estaLogueado()) {
    header('location: index.php');
  }
include 'header.php';

?>

<div class="contenedor-login">
  <h2 class="centrar" id="inicia-sesion">Inicia sesión</h2>
  <br>
    <form action="" method="post">
      <div class="formularioLogin">
        <div class="css">
          <div class="userData">
            <input type="text" id="idDelUsuario"  name="userName" placeholder="Usuario" required><span></span>
          </div>
        </div>
        <div class="css">
          <div class="userData">
            <input type="password" name="userPass" maxlength="8" placeholder="Contraseña" required>
            <div class="errores">
              <span><?php  if($_POST) { echo $errores["errorLogin"]; } ?></span>
            </div>
          </div>
        </div>
        <div class="extras">
          <div class="extraCaja">
            <input type="checkbox" name="recordar" id="recordar" value="">
            <label style="font-size:15px;" for="recordar" class="recordar">Recordame</label>
          </div>

            <!-- <a href="recuperarPass.php" id="forgotPass">Olvidé mi contraseña</a> -->
        </div>
        <div class="centrar">
          <button id="ingresar" type="submit">Ingresar</button>
        </div>
      </div>

    </form>
</div>


  <?php
include 'footer.php';
   ?>

  </body>
</html>
