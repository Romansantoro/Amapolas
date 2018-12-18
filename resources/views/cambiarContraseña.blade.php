@extends('default')

@section('section')

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
     <a href="/">Volver</a>
     <label for="submit" type="submit" name="send">Cambiar Contraseña</label>
   </div>
   </form>

@endsection
