@extends('default')

@section('section')

  <form class="" action="" method="post">
    @csrf
    <div class="formulario">
    <h2 id="tituloRegistro" style="margin-left: 0px;">Cambiar su contraseña</h2>

    <div class="userPass">                    <!-- INPUT DEL PASSWORD  -->
        <div class="inputUserData">
            <input id="userPass" type="password" name="password" value="" placeholder="Contraseña"><span style="color:red;">*</span>
        </div>
    </div>
    <div id="errorJSPass"></div>
    <div class="error">
        @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="userPasscheck">                    <!-- INPUT DEL PASSCHECK  -->
        <div class="userData">
            <div class="inputUserData">
                <input id="userPasscheck" type="password" name="password_confirmation" value="" placeholder="Confirme su Contraseña"><span style="color:red;">*</span>
            </div>
        </div>
    </div>
    <div id="errorJSPassCheck"></div>

   <div class="submit" style="background:white">
     <a href="/">Volver</a>
     <button for="submit" type="submit" name="send">Cambiar Contraseña</button>
   </div>
   </form>

@endsection
