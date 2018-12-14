
// var form = document.getElementsByClassName('.editProfile');
//
// form.onsubmit = function(){
//   var redirect = function(){
//     location.href="http://localhost/AMAPOLAs/claseGit/PROYECTO/profile.php"
//   }
//
//   var usuarioModificado = function(){
//     var body = document.querySelector('body')
//     body.innerHTML="";
//   	var createh1 = document.createElement('h1');
//   	createh1.innerText = "Usuario modificado exitosamente";
//   	body.append(createh1);
//   }
//
//   var myTimeOut = function(){
//   	setTimeout(redirect,3000);
//
//   }
//
//   usuarioModificado();
//   myTimeOut();
// }


/*------------------------JS DEL DROPDOWNS--------------------------------*/

  if (localStorage['tema']=='dia') {
    document.getElementById('href').href = "css/style.css";
  }else if (localStorage['tema']=='noche') {
    document.getElementById('href').href = "css/modoNocturno.css";
  }


function myFunctionMenu() {
document.getElementById("myDropdown1").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}

  function myFunctionCarrito2() {
    document.getElementById("myDropdown4").classList.toggle("show");
  }

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var dropdown = document.getElementById("carrito");
      if (dropdown.classList.contains('show')) {
      dropdown.classList.remove('show');
      }
  }
}

//----------------------JS PARA CAMBIOS PARA RESPONSIVE-------------------------------//

  var query = window.matchMedia("(max-width: 700px)");
  function changeScreen(query) {
    var mobile = document.getElementsByClassName('mobile');
      for (mobiles of mobile) {
        mobiles.classList.toggle('mobileFlex');
      }
    }

  query.addListener(changeScreen);

  var querymin = window.matchMedia("(min-width: 720px)");
    function changeScreenBig(querymin) {
      var mobile = document.getElementsByClassName('mobile');
        for (mobiles of mobile) {
          mobiles.classList.toggle('mobileNone');
        }
      }

  querymin.addListener(changeScreenBig);

//----------------------JS PARA CAMBIAR EL TEMA-------------------------------//

  function cambiarTemaDia() {
    var hrefs = document.getElementsByClassName('archivoCSS');
  for (href of hrefs) {
    href.href="css/style.css";
  }
  localStorage.setItem('tema','dia');
  }

  function cambiarTema() {
   var hrefs = document.getElementsByClassName('archivoCSS');
    for (href of hrefs) {
      href.href="css/modoNocturno.css";
    }
    localStorage.setItem('tema','noche');
  }
/*----------------------JS VALIDACIONES REGISTRO ----------------------*/

var validar = function (){
  
}
