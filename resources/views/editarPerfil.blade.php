@extends('default')

@section('section')
  <body>
    <h2 id="tituloRegistro">Editá tu perfil</h2>

            <form class="editProfile" action="editarPerfil.php" method="post" enctype="multipart/form-data">
                <div class="formulario">
                  <div class="css">
                    <div class="userData">
                      <div class="labelUserData">
                        <label for="userFullName"> Nombre completo:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userFullName" type="text" name="userFullName" value="{{ Auth::user()->name }}" required><span style="color:red;">*</span>
                      </div>
                  </div>
                   <div class="error">

                  </div>
                  </div>
                  <div class="css">
                       <div class="userData">
                           <div class="labelUserData">
                             <label for="country"> País de nacimiento:</label>
                           </div>
                           <div class="inputUserData">
                             <select id="userCountry" name="country">
                             </select>
                             <div id="provincia">
                             </div>
                             <span style="color:red;">*</span>
                           </div>
                       </div>
                        <div class="error">
                          @if ($errors->has('country'))
                              <span>
                                  <strong>{{ $errors->first('country') }}</strong>
                              </span>
                          @endif
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

                    </div>
                  </div>
                </div>
                <div class="">
                 <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
               </div>
                 <div class="submit" style="background:white">
                   <a href="/">Volver sin guardar</a>
                   <label for="submit" type="submit" name="send">Modificá tu perfil</label>
                 </div>
            </form>

        <script src="js/javascript.js"></script>
        <script src="select.js"></script>
@endsection
