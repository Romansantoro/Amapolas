@extends('default')

@section('section')
<body>
  <h2 id="tituloRegistro">Subí tus productos</h2>
<div class="formulario">
    <form class="formProd" action="" method="post" enctype="multipart/form-data">
      @csrf
          <div class="userData">
            <div class="labelUserData">
              <label for="userFullName"> Nombre del producto:</label>
            </div>
            <div class="inputUserData">
              <input id="prodName" type="text" name="prodName" value="" required><span style="color:red;">*</span>
            </div>
            <div class="error">

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

           </div>
        </div>

        <div class="userData">
            <div class="labelUserData">
              <label for="userName">Stock del producto:</label>
            </div>
            <div class="inputUserData">
              <input id="prodStock" type="number" name="prodStock" value="" required><span style="color:red;">*</span>
            </div>
            <div class="error">

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

           </div>
        </div>


        <div class="submitProd" style="background:white">
          <button id="buttonSubProd" type="submit" name="">Subí tu producto</button>
        </div>
    </form>
</div>

@endsection
