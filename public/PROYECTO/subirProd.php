<?php require_once 'header.php';
require_once 'models/autoload.php';

 ?>
<body>
<?php

  if ($_POST) {

  $errores = $validador->validarProducto($_POST, $_FILES, $bd);

  if(!array_filter($errores)){

    $prod = new Producto( $_POST['prodName'], $_POST['prodPrecio'], $_POST['prodDesc'], $_POST['prodSabor'], $_FILES['prodImagen']);

    $bd->guardarProd($prod);

  //  header('location: catalogo.php');
  }
}
?>
        <h2 id="tituloRegistro">Subí tus productos</h2>
    <div class="formulario">
          <form class="formProd" action="subirProd.php" method="post" enctype="multipart/form-data">
                <div class="userData">
                  <div class="labelUserData">
                    <label for="userFullName"> Nombre del producto:</label>
                  </div>
                  <div class="inputUserData">
                    <input id="prodName" type="text" name="prodName" value="" required><span style="color:red;">*</span>
                  </div>
                  <div class="error">
                    <?php if ($_POST) { echo $errores["errorProd"]; } ?>
                 </div>
              </div>
              <div class="userData">
                  <div class="labelUserData">
                    <label for="userName">Precio del producto:</label>
                  </div>
                  <div class="inputUserData">
                    <input id="prodPrecio" type="number" name="prodPrecio" value="" required><span style="color:red;">*</span>
                  </div>
                  <div class="error">
                    <?php if ($_POST) { echo $errores["errorPre"]; } ?>
                 </div>
              </div>

              <div class="userData">
                  <div class="labelUserData">
                    <label for="userEmail">Descripcion:</label>
                  </div>
                  <div class="inputUserData">
                    <input id="prodDesc" type="text" name="prodDesc" value=""required><span style="color:red;">*</span>
                  </div>
                  <div class="error">
                    <?php if ($_POST) { echo $errores["errorDesc"]; } ?>
                 </div>
              </div>
              <div class="userData">
                  <div class="labelUserData">
                    <label for="userEmail">Sabor:</label>
                  </div>
                  <div class="inputUserData">
                    <select class="optionSabor" name="prodSabor">
                      <option value="" disabled selected>Seleccione un sabor</option>
                      <option value="salado">Salado</option>
                      <option value="dulce">Dulce</option>
                    </select>
                  </div>
                  <div class="error">
                    <?php if ($_POST) { echo $errores["errorSabor"]; } ?>
                 </div>
              </div>
              <div class="userData">
                  <div class="labelUserData">
                    <label for="userEmail">Imagen:</label>
                  </div>
                  <div class="inputUserData">
                    <input type="file" name="prodImagen" value="">
                  </div>
                  <div class="error">
                    <?php if ($_POST) { echo $errores["errorImagen"]; } ?>
                 </div>
              </div>

                    <?php if ($_POST) { echo $errores["errorProductoRepetido"]; } ?>


              <div class="submitProd" style="background:white">
                <button id="buttonSubProd" type="submit" name="">Subí tu producto</button>
              </div>
          </form>
    </div>
<?php require_once 'footer.php' ?>
