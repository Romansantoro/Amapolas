@extends('default')

@section('section')

  <h2 id="tituloRegistro">Registrate</h2>
        <form class="" action="register.php" method="post" enctype="multipart/form-data">
          <div class="formulario">
            <div class="css">
                  <div class="userData">
                    <div class="labelUserData">
                      <label for="name"> Nombre completo:</label>
                    </div>
                    <div class="inputUserData">
                      <input id="userFullName" type="text" name="name" value="{{ old('name') }}" required><span style="color:red;">*</span>
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
                        <label for="userName"> Nombre de usuario:</label>
                      </div>
                      <div class="inputUserData">
                        <input id="userName" type="text" name="userName" value="{{ old('userName') }}" required><span style="color:red;">*</span>
                      </div>
                  </div>
                   <div class="error">
                     @if ($errors->has('userName'))
                         <span>
                             <strong>{{ $errors->first('userName') }}</strong>
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
                         <?php /* $userCountry; if (isset($_POST["userCountry"])) { $userCountry = $_POST["userCountry"];} */ ?>
                         <select id="userCountry" name="country">
                           <?php /* foreach ($paises as $pais) {
                            echo ('<option '.( ($userCountry == $pais )? 'selected':'').' value="'.$pais.'" >'.$pais.'</option>');
                          }*/?>
                         </select>
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
                      <input class="archivoSubir" id="userAvatar" type="file" name="avatar" value=""required>
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

@endsection
