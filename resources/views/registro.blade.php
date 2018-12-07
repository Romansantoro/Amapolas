@extends('default')

@section('section')

  <h2 id="tituloRegistro">Registrate</h2>
        <form class="" action="register.php" method="post" enctype="multipart/form-data">
          <div class="formulario">
            <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userFullName"> Nombre completo:</label>
                    </div>
                    <div class="inputUserData">
                      <input id="userFullName" type="text" name="userFullName" value="<?php /* if ($_POST) { echo $_POST['userFullName']; } */ ?>" required><span style="color:red;">*</span>
                    </div>
                  </div>
                   <div class="error">
                     <?php /* if ($_POST) { echo $errores["errorFullName"]; } */ ?>
                  </div>
            </div>
            <div class="css">
                  <div class="userData">
                      <div class="labelUserData">
                        <label for="userName"> Nombre de usuario:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userName" type="text" name="userName" value="<?php /* if ($_POST) { echo $_POST['userName']; } */ ?>" required><span style="color:red;">*</span>
                      </div>
                  </div>
                   <div class="error">
                     <?php /* if ($_POST) { echo $errores["errorUserName"];  echo $errores["errorUserNameRepetido"]; } */?>
                   </div>
              </div>
              <div class="css">
                   <div class="userData">
                       <div class="labelUserData">
                         <label for="userCountry"> País de nacimiento:</label>
                       </div>
                       <div class="inputUserData">
                         <?php /* $userCountry; if (isset($_POST["userCountry"])) { $userCountry = $_POST["userCountry"];} */ ?>
                         <select id="userCountry" name="userCountry">
                           <?php /* foreach ($paises as $pais) {
                            echo ('<option '.( ($userCountry == $pais )? 'selected':'').' value="'.$pais.'" >'.$pais.'</option>');
                          }*/?>
                         </select>
                         <span style="color:red;">*</span>
                       </div>
                   </div>
                    <div class="error">
                      <?php /*if ($_POST) { echo $errores["errorCountry"]; } */?>
                    </div>
              </div>
              <div class="css">
                  <div class="userData">
                      <div class="labelUserData">
                        <label for="userEmail">Correo electronico:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userEmail" type="email" name="userEmail" value="<?php /*if ($_POST) { echo $_POST['userEmail']; } */ ?>"required><span style="color:red;">*</span>
                      </div>
                  </div>
                  <div class="error">
                      <?php /*if ($_POST) { echo $errores["errorEmail"]; echo $errores["errorEmailRepetido"]; } */?>
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userEmailcheck">Confirme su correo electronico:</label>
                    </div>
                    <div class="inputUserData">
                      <input id="userEmailcheck" type="email" name="userEmailcheck" value="<?php /* if ($_POST) { echo $_POST['userEmailcheck']; } */?>"required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    <?php /*if ($_POST) { echo $errores["errorEmailCheck"]; } */?>
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userAge">Fecha de nacimiento:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userAge" type="date" name="userAge" value="<?php /* if ($_POST) { echo $_POST['userAge']; } */?>"required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    <?php /*if ($_POST) { echo $errores["errorFecha"]; } */?>
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userAvatar">Imagen de perfil:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input class="archivoSubir" id="userAvatar" type="file" name="userAvatar" value=""required>
                    </div>
                  </div>
                  <div class="error">
                    <?php /*if ($_POST) { echo $errores["errorAvatar"]; } */?>
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userPass">Contraseña:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userPass" type="password" name="userPass" value=""required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    <?php /*if ($_POST) { echo $errores["errorPass"]; } */?>
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userPasscheck">Confirme su contraseña:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userPasscheck" type="password" name="userPasscheck" value=""required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    <?php /* if ($_POST) { echo $errores["errorPassCheck"]; } */?>
                  </div>
              </div>
          </div>
          <div class="">
           <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
         </div>
         <div class="submit">
           <a href="index.php">Volver</a>
           <label for="submit" type="submit" name="send">Crear cuenta</label>
         </div>
        </form>

  </div>

@endsection
