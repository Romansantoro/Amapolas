@extends('home')

@section('section')

  <h2 id="tituloRegistro">Registrate</h2>
        <form class="" action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="formulario">
            <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="name"> Nombre:</label>
                    </div>
                    <div class="inputUserData">
                      <input id="name" type="text" name="name" value="{{ old('name') }}" required><span style="color:red;">*</span>
                    </div>
                  </div>
                   <div class="error">
                     @if ($errors->has('name'))
                         <span>
                             <strong>{{ $errors->first('name') }}</strong>
                         </span>
                     @endif
                  </div>
            </div>
            <div class="css">
                  <div class="userData">
                      <div class="labelUserData">
                        <label for="last_name"> Apellido:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required><span style="color:red;">*</span>
                      </div>
                  </div>
                   <div class="error">
                     @if ($errors->has('last_name'))
                         <span>
                             <strong>{{ $errors->first('last_name') }}</strong>
                         </span>
                     @endif
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
                          <label for="userAddress"> Dirección:</label>
                        </div>
                        <div class="inputUserData">
                          <input id="userAddress" type="text" name="userAddress" value="{{ old('userAddress') }}" required><span style="color:red;">*</span>
                        </div>
                    </div>
                     <div class="error">
                       @if ($errors->has('userAddress'))
                           <span>
                               <strong>{{ $errors->first('userAddress') }}</strong>
                           </span>
                       @endif
                     </div>
                </div>
              <div class="css">
                  <div class="userData">
                      <div class="labelUserData">
                        <label for="email">Correo electronico:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userEmail" type="email" name="email" value="{{ old('email') }}"required><span style="color:red;">*</span>
                      </div>
                  </div>
                  <div class="error">
                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userEmailcheck">Confirme su correo electronico:</label>
                    </div>
                    <div class="inputUserData">
                      <input id="userEmailcheck" type="email" name="userEmailcheck" value="{{ old('userEmailcheck') }}"required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    @if ($errors->has('userEmailcheck'))
                        <span>
                            <strong>{{ $errors->first('userEmailcheck') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="age">Fecha de nacimiento:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userAge" type="date" name="age" value="{{ old('age') }}"required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    @if ($errors->has('age'))
                        <span>
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="avatar">Imagen de perfil:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input class="archivoSubir" id="userAvatar" type="file" name="avatar" value="">
                    </div>
                  </div>
                  <div class="error">
                    @if ($errors->has('avatar'))
                        <span>
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userPass">Contraseña:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userPass" type="password" name="password" value=""required><span style="color:red;">*</span>
                    </div>
                  </div>
                  <div class="error">
                    @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="userPasscheck">Confirme su contraseña:</label> <br>
                    </div>
                    <div class="inputUserData">
                      <input id="userPasscheck" type="password" name="password_confirmation" value=""required><span style="color:red;">*</span>
                    </div>
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
<script src="select.js" charset="utf-8"></script>
@endsection
