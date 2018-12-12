@extends('default')

@section('section')
<body>
  <h2 id="tituloRegistro">Subí tu categoria</h2>
<div class="formulario">
    <form class="formProd" action="" method="post" enctype="multipart/form-data">
      @csrf
          <div class="userData">
            <div class="labelUserData">
              <label for="userFullName"> Nombre del categoria:</label>
            </div>
            <div class="inputUserData">
              <input id="prodName" type="text" name="prodName" value="" required><span style="color:red;">*</span>
            </div>
            <div class="error">

           </div>
        </div>
        <div class="submitProd" style="background:white">
          <button id="buttonSubProd" type="submit" name="">Subí tu categoria</button>
        </div>
    </form>
</div>

@endsection
