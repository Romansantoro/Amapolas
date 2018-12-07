<?php require_once 'models/autoload.php'; $userCountry = "";
$paises=[
  "Seleccione un pais", "Afghanistan", "Albania", "Argelia", "Alemania", "American Samoa", "Andorra", "Angola", "Anguilla", "Antartida", "Antigua y Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia-Herzegovina", "Botswana", "Bouvet Island", "Brasil", "Brit Ind Ocean Territory", "Brunei Darussalm", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Canary Islands", "Cape Verde", "Caymen Islands", "Central African Rep", "Chad", "Chile", "China", "Christmas Islands", "Cocos Islands", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Chipre", "Dem Rep. of Korea", "Dinamarca", "Djibouti", "Dominica", "East Timor", "Ecuador", "Egipto", "El Salvador", "Eritrea", "España", "Estados Unidos de America", "Estonia", "Etiopia", "Faroe Islands", "Fiji", "Finland", "Francia", "Guiana Francesa", "Polynesia Francesa", "French So. Territories", "Gabon", "Gambia", "Georgia", "Ghana", "Gibraltar", "Guinea Equatorial", "Grecia", "Greenland", "Grenada", "Guadalupe", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Heard, McDonald Island", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Inglaterra", "Iran", "Iraq", "Ireland", "Islas Filipinas", "Israel", "Italia", "Ivory Coast", "Jamaica", "Japon", "Jordan", "Kazakhistan", "Kenia", "Kiribati", "Korea del Norte", "Kuwait", "Kyrqyzstan", "Laos", "Lativa", "Libano", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Madagascar", "Malawi", "Malaysia", "Maldivas", "Mali", "Malta", "Malvinas Argentinas", "Mariana Islands", "Marruecos", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Mozambique", "Myanmar", "Nambia", "Nauru", "Nepal", "Netherland Antilles", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue Island", "Norfolk Island", "Northern Mariana Island", "Norway", "OCE", "Oman", "Pacific Islands", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "Republica de Corea", "Republica Dominicana", "Reunion", "Romania", "Russian Federation", "Rwanda", "South Georgia Sandwich", "Saint Pierre Miguelon", "Samoa", "San Marino", "Sao Tomee and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierre Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somali Republic", "South Africa", "South Korea", "Sri Lanka", "St. Helena", "St. Kits-Nevis", "St. Lucia", "St. Vincent/Grenadines", "Sudan", "Suriname", "Svalbard Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokeelau", "Tonga", "Trinidad Tobago", "Tunisia", "Turquia", "Turkmenistan", "Turks Caicos Islands", "Tuvalu", "Uganda", "Ukrania", "United Arab Emirates", "Uruguay", "US Minor Outlying Is.", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands: British", "Virgin Islands: US", "Wallis Futuna Islands", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zaire", "Zambia", "Zimbabwe"
];


    if ($auth->estaLogueado()) {
      header('location: index.php');
    }
    if ($_POST) {

      $errores = $validador->validarRegistro($_POST, $_FILES, $bd);
      if(!array_filter($errores)){
        $usuario = new Usuario($_POST['userEmail'], $_POST['userPass'], $_POST['userName'], $_POST['userFullName'], $_POST['userAge'], $_FILES['userAvatar'], $_POST['userCountry'], $id = NULL);
        $bd->guardarUsuario($usuario);
        $auth->loguear($_POST['userName']);
        header('location: profile.php?userName='.$_POST['userName'].'');
      }
    }
    include 'header.php';
    ?>
      <h2 id="tituloRegistro">Registrate</h2>
            <form class="" action="register.php" method="post" enctype="multipart/form-data">
              <div class="formulario">
                <div class="css">
                      <div class="userData">
                        <div class="labelUserData">
                          <label for="userFullName"> Nombre completo:</label>
                        </div>
                        <div class="inputUserData">
                          <input id="userFullName" type="text" name="userFullName" value="<?php if ($_POST) { echo $_POST['userFullName']; } ?>" required><span style="color:red;">*</span>
                        </div>
                      </div>
                       <div class="error">
                         <?php if ($_POST) { echo $errores["errorFullName"]; } ?>
                      </div>
                </div>
                <div class="css">
                      <div class="userData">
                          <div class="labelUserData">
                            <label for="userName"> Nombre de usuario:</label>
                          </div>
                          <div class="inputUserData">
                            <input id="userName" type="text" name="userName" value="<?php if ($_POST) { echo $_POST['userName']; } ?>" required><span style="color:red;">*</span>
                          </div>
                      </div>
                       <div class="error">
                         <?php if ($_POST) { echo $errores["errorUserName"];  echo $errores["errorUserNameRepetido"]; } ?>
                       </div>
                  </div>
                  <div class="css">
                       <div class="userData">
                           <div class="labelUserData">
                             <label for="userCountry"> País de nacimiento:</label>
                           </div>
                           <div class="inputUserData">
                             <?php $userCountry; if (isset($_POST["userCountry"])) { $userCountry = $_POST["userCountry"];} ?>
                             <select id="userCountry" name="userCountry">
                               <?php foreach ($paises as $pais) {
                                echo ('<option '.( ($userCountry == $pais )? 'selected':'').' value="'.$pais.'" >'.$pais.'</option>');
                              }?>
                             </select>
                             <span style="color:red;">*</span>
                           </div>
                       </div>
                        <div class="error">
                          <?php if ($_POST) { echo $errores["errorCountry"]; } ?>
                        </div>
                  </div>
                  <div class="css">
                      <div class="userData">
                          <div class="labelUserData">
                            <label for="userEmail">Correo electronico:</label>
                          </div>
                          <div class="inputUserData">
                            <input id="userEmail" type="email" name="userEmail" value="<?php if ($_POST) { echo $_POST['userEmail']; } ?>"required><span style="color:red;">*</span>
                          </div>
                      </div>
                      <div class="error">
                          <?php if ($_POST) { echo $errores["errorEmail"]; echo $errores["errorEmailRepetido"]; } ?>
                      </div>
                  </div>
                  <div class="css">
                      <div class="userData">
                        <div class="labelUserData">
                          <label for="userEmailcheck">Confirme su correo electronico:</label>
                        </div>
                        <div class="inputUserData">
                          <input id="userEmailcheck" type="email" name="userEmailcheck" value="<?php if ($_POST) { echo $_POST['userEmailcheck']; } ?>"required><span style="color:red;">*</span>
                        </div>
                      </div>
                      <div class="error">
                        <?php if ($_POST) { echo $errores["errorEmailCheck"]; } ?>
                      </div>
                  </div>
                  <div class="css">
                      <div class="userData">
                        <div class="labelUserData">
                          <label for="userAge">Fecha de nacimiento:</label> <br>
                        </div>
                        <div class="inputUserData">
                          <input id="userAge" type="date" name="userAge" value="<?php if ($_POST) { echo $_POST['userAge']; } ?>"required><span style="color:red;">*</span>
                        </div>
                      </div>
                      <div class="error">
                        <?php if ($_POST) { echo $errores["errorFecha"]; } ?>
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
                        <?php if ($_POST) { echo $errores["errorAvatar"]; } ?>
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
                        <?php if ($_POST) { echo $errores["errorPass"]; } ?>
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
                        <?php if ($_POST) { echo $errores["errorPassCheck"]; } ?>
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

      <?php
     include 'footer.php';
       ?>



</html>
