
@extends('home')

@section('section')

<h2 id="tituloRegistro">Registrate</h2>
    <form class="" action="" method="post" enctype="multipart/form-data">
        @csrf
            <div class="formulario">

                <div class="userName2">                    <!-- INPUT DEL NOMBRE  -->
                    <div class="inputUserData">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required placeholder="Nombre"><span style="color:red;">*</span>
                      </div>
                </div>
                <div class="errorJSName"id="errorJSName"></div>
                <div class="error">
                    @if ($errors->has('name'))
                        <span>
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userLastName">                    <!-- INPUT DEL APELLIDO  -->
                    <div class="inputUserData">
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required placeholder="Apellido"><span style="color:red;">*</span>
                    </div>
                </div>
                <div id="errorJSLastName"></div>
                <div class="error">
                  @if ($errors->has('last_name'))
                      <span>
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="userEmail">                    <!-- INPUT DEL EMAIL  -->
                    <div class="inputUserData">
                        <input id="userEmail" type="email" name="email" value="{{ old('email') }}"required placeholder="Email"><span style="color:red;">*</span>
                    </div>
                </div>
                <div id="errorJSEmail"></div>
                <div class="error">
                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userEmailcheck">                    <!-- INPUT DEL EMAILCHECK  -->
                    <div class="userData">
                        <div class="inputUserData">
                            <input id="userEmailcheck" type="email" name="userEmailcheck" value="{{ old('userEmailcheck') }}"required placeholder="Confirme su Email"><span style="color:red;">*</span>
                        </div>
                    </div>
                    <div id="errorJSEmailCheck"></div>
                    <div class="error">
                        @if ($errors->has('userEmailcheck'))
                            <span>
                                <strong>{{ $errors->first('userEmailcheck') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="userAge">                    <!-- INPUT DEL USER AGE  -->
                    <div class="userData">
                        <div class="labelUserData">
                            <label for="age">Fecha de nacimiento:</label> <br>
                        </div>
                        <div class="inputUserData">
                            <input id="userAge" type="date" name="age" value="{{ old('age') }}"required><span style="color:red;">*</span>
                        </div>
                    </div>
                    <div id="errorJSAge"></div>
                    <div class="error">
                        @if ($errors->has('age'))
                            <span>
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="userAvatar">                    <!-- INPUT DEL AVATAR  -->
                    <div class="userData">
                        <div class="labelUserData">
                            <label for="avatar">Imagen de perfil:</label> <br>
                        </div>
                        <div class="inputUserData">
                            <input class="archivoSubir" id="userAvatar" type="file" name="avatar" value="">
                        </div>
                    </div>
                    <div id="errorJSAvatar"></div>
                    <div class="error">
                        @if ($errors->has('avatar'))
                            <span>
                                <strong>{{ $errors->first('avatar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="userCountry">                    <!-- INPUT DEL PAIS  -->
                    <div class="inputUserData">
                        <select id="userCountry" name="country">
                        </select><span style="color:red;">*</span>
                        <div id="provincia">
                        </div>

                    </div>
                </div>
                <div class="error">
                    @if ($errors->has('country'))
                        <span>
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userPass">                    <!-- INPUT DEL PASSWORD  -->
                    <div class="inputUserData">
                        <input id="userPass" type="password" name="password" value=""required placeholder="Contraseña"><span style="color:red;">*</span>
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
                            <input id="userPasscheck" type="password" name="password_confirmation" value=""required placeholder="Confirme su Contraseña"><span style="color:red;">*</span>
                        </div>
                    </div>
                </div>
                <div id="errorJSPassCheck"></div>


            </div>  <!-- CIERRE DE LA CLASE FORMULARIO  -->

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
