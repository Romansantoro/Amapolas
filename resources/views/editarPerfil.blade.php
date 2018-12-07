@extends('default')

@section('section')

  <body>
    <?php /*
   $INFO = $_SESSION['logueado'];

   $query = $bd->getConex()-> prepare('SELECT * FROM usuarios WHERE nombredeusuario=? ');

   $query -> execute([$INFO]);

   $query->setFetchMode(PDO::FETCH_ASSOC);

   $usuarioDatos = $query -> fetch();

   $usuariobj = new usuario ($usuarioDatos['email'], $usuarioDatos['password'], $usuarioDatos['nombredeusuario'], $usuarioDatos['nombre'], $usuarioDatos['edad'], null, $usuarioDatos['nacionalidad'], $usuarioDatos['id']);


    if ($_POST) {
      $errores = $validador->validarEditarUsuario($_POST, $_FILES,$bd);
      if(!array_filter($errores)){
        $usuariobj->setUserFullName($_POST['userFullName']);
        $usuariobj ->setAvatar($_FILES['userAvatar']);
        $usuariobj->setPassword(password_hash($_POST['userPass'], PASSWORD_DEFAULT));
        $usuariobj->setUserCountry($_POST['userCountry']);
        $bd->modificarUsuario($usuariobj);
        header('location: profile.php?userName='.$_SESSION['logueado'].'');
      }
    } */ ?>

          <h2 id="tituloRegistro">Editá tu perfil</h2>

            <form class="editProfile" action="editarPerfil.php" method="post" enctype="multipart/form-data">
                <div class="formulario">
                  <div class="css">
                    <div class="userData">
                      <div class="labelUserData">
                        <label for="userFullName"> Nombre completo:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userFullName" type="text" name="userFullName" value="<?php /*  if ($auth->estaLogueado()){ echo $usuariobj->getUserFullName();} */ ?>" required><span style="color:red;">*</span>
                      </div>
                  </div>
                   <div class="error">
                     <?php /*  if ($_POST) { echo $errores["errorFullName"]; } */ ?>
                  </div>
                  </div>
                  <div class="css">
                    <div class="userData">
                        <div class="labelUserData">
                          <label for="userCountry"> País de nacimiento:</label>
                        </div>
                        <div class="inputUserData">
                          <!-- <?php /*   $userCountry = $usuariobj->getUserCountry(); */ ?> -->
                          <select id="userCountry" name="userCountry">
                            <?php /*  foreach ($paises as $pais) {
                             echo ('<option '.( ($userCountry == $pais )? 'selected':'').' value="'.$pais .'" >'.$pais.'</option>');}*/ ?>
                          </select>
                          <span style="color:red;">*</span>
                        </div>
                    </div>
                    <div class="error">
                      <?php /*  if ($_POST) { echo $errores["errorCountry"]; } */ ?>
                    </div>
                  </div>
                  <div class="css">
                    <div class="userData">
                      <div class="labelUserData">
                        <label for="userAvatar">Imagen de perfil:</label> <br>
                      </div>
                      <div class="inputUserData">
                        <input class="archivoSubir" id="userAvatar" type="file" name="userAvatar" value="<?php /*  echo $usuariobj->getAvatar() */ ?>"required>
                      </div>
                    </div>
                    <div class="error">
                      <?php /*  if ($_POST) { echo $errores["errorAvatar"]; } */ ?>
                    </div>
                  </div>
                  <div class="css">
                    <div class="userData">
                      <div class="labelUserData">
                        <label for="userPass">Ingrese su contraseña para confirmar los cambios:</label> <br>
                      </div>
                      <div class="inputUserData">
                        <input id="userPass" type="password" name="userPass" value=""required><span style="color:red;">*</span>
                      </div>
                    </div>
                    <div class="error">
                      <?php /*  if ($_POST) { echo $errores["errorPass"]; } */ ?>
                    </div>
                  </div>
                </div>
                <div class="">
                 <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
               </div>
                 <div class="submit" style="background:white">
                   <a href="index.php">Volver sin guardar</a>
                   <label for="submit" type="submit" name="send">Modificá tu perfil</label>
                 </div>
            </form>

        <script src="js/javascript.js"></script>

@endsection
