    /*----------------------------------VALIDACIONES EDITAR PERFIL----------------------------------------------------*/
    
        console.log('hola')
        var formularioEditP = document.querySelector('form.editarPerfil');
        console.log(formularioEditP)
         var formularioEd = formularioEditP.elements;
        console.log(formularioEd)

         function errorName(input){
           var errorfeed = document.getElementsByClassName('errorJSName');
            if (input.value == "") {
              errorfeed.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('name').style.borderColor = 'darkred'
            }else if (input.value) {
              document.getElementById('name').style.borderColor = 'white'
              errorfeed.innerHTML = '';
                if(errorNombreRegex.test(input.value)==false){
                  document.getElementById('name').style.borderColor = 'darkred'
                  errorfeed.innerHTML = '<p>Error no es un nombre</p>';
                }else if(errorNombreRegex.test(input.value)==true) {
                  document.getElementById('name').style.borderColor = 'white';
                  errorfeed.innerHTML = '';
                }
            }
          }

         function errorLastName(input){
           var errorApellido = document.getElementById('errorJSLastName');
            if (input.value == "") {
              errorApellido.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('last_name').style.borderColor = 'darkred'
            }else if (input.value) {
              document.getElementById('last_name').style.borderColor = 'white'
              errorApellido.innerHTML = '';
              if(errorNombreRegex.test(input.value)==false){
                document.getElementById('last_name').style.borderColor = 'darkred'
                errorApellido.innerHTML = '<p>Error no es un apellido</p>';
              }else if(errorNombreRegex.test(input.value)==true) {
                document.getElementById('last_name').style.borderColor = 'white'
                errorApellido.innerHTML = '';
              }
            }
         }

         function errorAdress(input){
           var errorAdress = document.getElementById('errorJSAdress');
            if (input.value == "") {
              errorAdress.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('adress').style.borderColor = 'darkred'
            }else if (input.value) {
              errorAdress.innerHTML = '';
              document.getElementById('adress').style.borderColor = 'white'
              if(errorAdressRegex.test(input.value)==false){
                document.getElementById('adress').style.borderColor = 'darkred'
                errorAdress.innerHTML = '<p>Error no es una direccion valida</p>';
              }else if(errorAdressRegex.test(input.value)==true) {
                document.getElementById('adress').style.borderColor = 'white'
                errorAdress.innerHTML = '';
              }
            }
         }

         function errorEmail(input){
           var errorEmail = document.getElementById('errorJSEmail');
            if (input.value == "") {
              errorEmail.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('userEmail').style.borderColor = 'darkred'
            }else if (input.value) {
              errorEmail.innerHTML = '';
              document.getElementById('userEmail').style.borderColor = 'white'
              if(errorEmailRegex.test(input.value)==false){
                document.getElementById('userEmail').style.borderColor = 'darkred'
                errorEmail.innerHTML = '<p>Error no es una direccion de correo valida</p>';
              }else if(errorEmailRegex.test(input.value)==true) {
                document.getElementById('userEmail').style.borderColor = 'white'
                errorEmail.innerHTML = '';
              }
            }
         }

         function errorEmailCheck(input){
           var errorEmailCheck = document.getElementById('errorJSEmailCheck');
           var email = document.getElementById('userEmail')
            if (input.value == "") {
              errorEmailCheck.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('userEmailcheck').style.borderColor = 'darkred'
            }else if (input.value) {
              document.getElementById('userEmailcheck').style.borderColor = 'white'
              errorEmailCheck.innerHTML = '';
              if(input.value!==email.value){
                document.getElementById('userEmailcheck').style.borderColor = 'darkred'
                errorEmailCheck.innerHTML = '<p>Error el correo no coincide</p>';
              }else if(input.value==email.value) {
                document.getElementById('userEmailcheck').style.borderColor = 'white'
                errorEmailCheck.innerHTML = '';
              }
            }
         }

         function errorAge(input){
           var errorAge = document.getElementById('errorJSAge');
            if (input.value == "") {
              errorAge.innerHTML = '<p>Error campo Obligatorio</p>';
              document.getElementById('userAge').style.borderColor = 'darkred'
            }else if (input.value) {
              var input = input.value;
              var year = input.substring(4,0);
              var month = input.substring(7,5);
              var day = input.substring(10,8);
              var birthday  = new Date(year,month,day);
              function calcularEdad(input) {
                var today = new Date();
                var age = today.getFullYear() - birthday.getFullYear();
                  if(age<18){
                    var addClasslist = document.getElementById('errorJSAge');
                    errorAge.innerHTML = '<p>Lo siento, no sos mayor de edad</p>';
                    document.getElementById('userAge').style.borderColor = 'darkred'
                  }else{
                    var addClasslist = document.getElementById('errorJSAge');
                    errorAge.innerHTML = '';
                    document.getElementById('userAge').style.borderColor = 'white'
                  }
               }
              calcularEdad();
            }
          }

           function errorAvatar(input){
             var errorAvatar = document.getElementById('errorJSAvatar');
             if (input.value == "") {
               errorAvatar.innerHTML = '<p>Error campo Obligatorio</p>';
               document.getElementById('userAvatar').style.borderColor = 'darkred'
             } else if (input.value) {
               document.getElementById('userAvatar').style.borderColor = 'white'
                errorAvatar.innerHTML = '';
                var cadena = input.value
                var separador = "."
                var limite = 2
                var pathYformato = cadena.split(separador, limite);
                var formato = pathYformato[1];
                var formatosAceptados = ["JPG","jpg","PNG","png","jpeg"];
                for (f of formatosAceptados) {
                   if(f!==formato){
                    errorAvatar.innerHTML = 'Formato no valido. Solo aceptamos (JPG, jpg, PNG, png, jpeg)';
                    document.getElementById('userAvatar').style.borderColor = 'darkred'
                  }else if (f==formato) {
                    errorAvatar.innerHTML = '';
                    return  document.getElementById('userAvatar').style.borderColor = 'white'
                  }
                }
              }
           }

           function errorPass(input){
             var errorPass = document.getElementById('errorJSPass');
              if (input.value == "") {
                errorPass.innerHTML = '<p>Error campo Obligatorio</p>';
                document.getElementById('userPass').style.borderColor = 'darkred'
              }else if (input.value) {
                document.getElementById('userPass').style.borderColor = 'white'
                errorPass.innerHTML = '';
                if(errorPassRegex.test(input.value)==false){
                  document.getElementById('userPass').style.borderColor = 'darkred'
                  errorPass.innerHTML = '<p>Contraseña invalida. Debe contener un numero y al menos 6 caracteres</p>';
                }else if(errorPassRegex.test(input.value)==true) {
                  errorPass.innerHTML = '';
                  document.getElementById('userPass').style.borderColor = 'white'
                }
              }
           }

           function errorPassCheck(input){
             var errorPassCheck = document.getElementById('errorJSPassCheck');
             var password = document.getElementById('userPass');
              if (input.value == "") {
                errorPassCheck.innerHTML = '<p>Error campo Obligatorio</p>';
                document.getElementById('userPasscheck').style.borderColor = 'darkred'
              }else if (input.value) {
                errorPassCheck.innerHTML = '';
                document.getElementById('userPasscheck').style.borderColor = 'white'
                if(input.value!==password.value){
                  document.getElementById('userPasscheck').style.borderColor = 'darkred'
                  errorPassCheck.innerHTML = '<p>la contraseña  no coincide</p>';
                }else if(input.value==password.value) {
                  document.getElementById('userPasscheck').style.borderColor = 'white'
                  errorPassCheck.innerHTML = '';
                }
              }
           }

          for (eachform of arrayForm) {
            eachform.onblur = function(){
                  if (this.name=='name') {
                    errorName(this);
                  }
                  if (this.name=='last_name') {
                    errorLastName(this);
                  }
                  if (this.name=='address') {
                    errorAdress(this);
                  }
                  if (this.name=='email') {
                    errorEmail(this);
                  }
                  if (this.name=='userEmailcheck') {
                    errorEmailCheck(this);
                  }
                  if (this.name=='age') {
                    errorAge(this);
                  }
                  if (this.name=='avatar') {
                    errorAvatar(this);
                  }
                  if (this.name=='password') {
                    errorPass(this);
                  }
                  if (this.name=='password_confirmation') {
                    errorPassCheck(this);
                  }
               }
            }

          form.onsubmit = function (event){

            for (eachform of arrayForm) {
              var el = eachform;
                    if (el.name=='name') {
                      errorName(el);
                    }
                    if (el.name=='last_name') {
                      errorLastName(el);
                    }
                    if (el.name=='address') {
                      errorAdress(el);
                    }
                    if (el.name=='email') {
                      errorEmail(el);
                    }
                    if (el.name=='userEmailcheck') {
                      errorEmailCheck(el);
                    }
                    if (el.name=='age') {
                      errorAge(el);
                    }
                    if (el.name=='avatar') {
                      errorAvatar(el);
                    }
                    if (el.name=='password') {
                      errorPass(el);
                    }
                    if (el.name=='password_confirmation') {
                      errorPassCheck(el);
                    }

              }
            var validando = document.getElementById('errorJSName');
            var validando1 = document.getElementById('errorJSLastName');
            var validando2 = document.getElementById('errorJSEmail');
            var validando3 = document.getElementById('errorJSEmailCheck');
            var validando4 = document.getElementById('errorJSAge');
            var validando5 = document.getElementById('errorJSPass');
            var validando6 = document.getElementById('errorJSPassCheck');
            if (validando.innerHTML!==''||validando1.innerHTML!==''||validando2.innerHTML!==''||validando3.innerHTML!==''||validando4.innerHTML!==''||validando5.innerHTML!==''||validando6.innerHTML!=='') {
              event.preventDefault();
              document.getElementById('corregir').innerHTML='<h3>Hay errores en el formulario! Corrija y vuelva a enviar<h3>';
              document.getElementById('corregir').scrollIntoView({
                behavior: 'smooth'
              });
            }else{
              document.getElementById('corregir').innerHTML='';
              document.getElementById('corregir').innerHTML='Su usuario se registro exitosamente';
            }
          }
