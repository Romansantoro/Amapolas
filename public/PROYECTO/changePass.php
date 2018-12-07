<?php
require_once 'models/autoload.php';

$INFO = $_SESSION['logueado'];

$query = $bd->getConex()-> prepare('SELECT * FROM usuarios WHERE nombredeusuario=? ');

$query -> execute([$INFO]);

$query->setFetchMode(PDO::FETCH_ASSOC);

$usuarioDatos = $query -> fetch();

$usuariobj = new usuario ($usuarioDatos['email'], $usuarioDatos['password'], $usuarioDatos['nombredeusuario'], $usuarioDatos['nombre'], $usuarioDatos['edad'], null, $usuarioDatos['nacionalidad'], $usuarioDatos['id']);

if ($_POST) {
  $errores = $validador->validarCambioPass($_POST, $bd);
  if(!array_filter($errores)){
    var_dump($errores);
    $usuariobj->setPassword(password_hash($_POST['userNewPass'], PASSWORD_DEFAULT));
    $bd->guardarNuevaPass($usuariobj);
  //  header('location: profile.php?userName='.$_SESSION['logueado'].'');
  }
}
require_once 'header.php';
?>
    <form class="" action="changePass.php" method="post">
      <div class="formulario">
      <h2 id="tituloRegistro" style="margin-left: 0px;">Cambiar su contraseña</h2>
       <br><br>
       <div class="changePass">
         <div class="css">
           <div class="userData">
             <div class="labelUserData">
               <label for="userPass">Contraseña actual:</label> <br>
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
               <label for="userPasscheck">Ingrese nueva contraseña:</label> <br>
             </div>
             <div class="inputUserData">
               <input id="userPasscheck" type="password" name="userNewPass" value=""required><span style="color:red;">*</span>
             </div>
           </div>
           <div class="error">
             <?php if ($_POST) { echo $errores["errorNewPass"]; } ?>
           </div>
         </div>
       </div>
       <div class="css">
         <div class="userData">
           <div class="labelUserData">
             <label for="userPass">Confirme su nueva contraseña:</label> <br>
           </div>
           <div class="inputUserData">
             <input id="userPass" type="password" name="userNewPassCheck" value=""required><span style="color:red;">*</span>
           </div>
         </div>
       </div>
     </div>
     <div class="">
      <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
    </div>
     <div class="submit" style="background:white">
       <a href="index.php">Volver</a>
       <label for="submit" type="submit" name="send">Cambiar Contraseña</label>
     </div>
     </form>
   <?php require_once 'footer.php';
    ?>
