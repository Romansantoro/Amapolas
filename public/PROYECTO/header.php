<!DOCTYPE html>
<?php require_once 'models/autoload.php';
if (isset($_POST['logout'])) {
  $auth->logout();
  header('location: index.php');
}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="css/catalogo.css">

    <title>AMAPOLAS</title>
  </head>
  <body>

    <header>
      <a href="index.php" id="logo"> <div class="logo">
        <img src="" alt="">
        <h1>Amapolas</h1>
      </div>
      </a>
      <div class="menu">
        <div class="dropdownMenu">
            <button class="dropbtn" onclick="myFunctionMenu()"style="display:flex" id="lista">MENU<div><ion-icon name="arrow-dropdown" style="margin-top:5px"></ion-icon></div><i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content" id="myDropdown1">
              <?php if (!$auth->estaLogueado()||isset($_COOKIE['logueado'])) {
                echo '<a href="login.php" >Ingresar</a>';
              } ?>
              <?php if (!$auth->estaLogueado()||isset($_COOKIE['logueado'])) {
                echo '<a href="register.php" >Registrarse</a>';
              } ?>
              <a href="quienes-somos.php"  id="lista">¿Quienes somos?</a>
              <a href="faqs.php">Preguntas frecuentes</a>
            </div>
        </div>
        <div class="dropdownMenu">
            <button class="dropbtn" onclick="myFunctionPerfil()" id="lista" style="display:<?php if(!$auth->estaLogueado()&&!isset($_COOKIE['logueado'])){echo 'none';}else{echo'flex';}?>"><?php echo $_SESSION['logueado'] ?><ion-icon name="arrow-dropdown" style="margin-top:5px"></ion-icon><i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content" id="myDropdown2">
              <a href="profile.php">Entrar al perfil</a>
              <a href="editarPerfil.php">Editar perfil</a>
              <a href="changePass.php">Cambiar contraseña</a>
              <form action="" method="post"<?php  if (!$auth->estaLogueado() && !isset($_COOKIE['logueado'])) {
                    echo 'style="display:none;"';
                  }?>>
                  <button id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
              </form>
            </div>
        </div>
        <!-- <div class="dropdownMenu">
            <button class="dropbtn" onclick="myFunctionCarrito()" id="lista"> <li class="carrito" id="lista"><ion-icon name="cart"></ion-icon></li>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown3">
              <a href="profile.php">Ir a pagar</a>
            </div>
        </div> -->
      </div>
      <nav class="userNav">
        <ul>
          <a href="login.php"
          <?php if ($auth->estaLogueado() || isset($_COOKIE['logueado'])) {
            echo 'style="display:none;"';
          }?> ><li id="lista">Ingresar</li></a>
          <a href="register.php"<?php if ($auth->estaLogueado() || isset($_COOKIE['logueado'])) {
            echo 'style="display:none;"';
          }?>><li id="lista">Registrate</a></li>


          <div class="dropdownMenu">
              <button <?php  if (!$auth->estaLogueado() && !isset($_COOKIE['logueado'])) {
                  echo 'style="display:none;"';
                }else {
                  echo 'style="display:flex"';
                }?>class="dropbtn" onclick="myFunction()" id="lista"><?php echo $_SESSION['logueado'] ?>
                <div><ion-icon name="arrow-dropdown" style="margin-top:5px"></ion-icon></div><i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content" id="myDropdown">
                <a href="profile.php">Mi perfil</a>
                <a href="editarPerfil.php">Editar mi perfil</a>
                <a href="changePass.php">Cambiar mi contraseña</a>
                <form action="" method="post"<?php  if (!$auth->estaLogueado() && !isset($_COOKIE['logueado'])) {
                      echo 'style="display:none;"';
                    }?>>
                    <button id="cerrarSesion" type="submit" name="logout">Cerrar Sesion</button>
                </form>
              </div>
          </div>

          <a href="preguntas-frecuentes.php"><li id="lista">Preguntas frecuentes</li></a>
          <a href="quienes-somos.php"><li class="quienes" id="lista">¿Quienes somos?</li></a>
          <!-- <div class="dropdownMenu">
              <button class="dropbtn" onclick="myFunctionCarrito2()" id="lista"> <li class="carrito" id="lista"><ion-icon name="cart"></ion-icon></li>
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content" id="myDropdown4">
                <a href="pagar.php">Ir a pagar</a>
              </div>
          </div> -->
        </ul>
      </nav>
      <script type="text/javascript">

      /*------------------------JS DEL DROPDOWN______________________________*/

      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }

      window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
                }
            }
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
      function myFunctionPerfil() {
          document.getElementById("myDropdown2").classList.toggle("show");
      }

      window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
        }
      }
      // function myFunctionCarrito() {
      //     document.getElementById("myDropdown3").classList.toggle("show");
      // }
      //
      // window.onclick = function(e) {
      //   if (!e.target.matches('.dropbtn')) {
      //     var myDropdown = document.getElementById("myDropdown");
      //       if (myDropdown.classList.contains('show')) {
      //         myDropdown.classList.remove('show');
      //       }
      //   }
      //
      // }
      // function myFunctionCarrito2() {
      //     document.getElementById("myDropdown4").classList.toggle("show");
      // }
      //
      // window.onclick = function(e) {
      //   if (!e.target.matches('.dropbtn')) {
      //     var myDropdown = document.getElementById("myDropdown4");
      //       if (myDropdown.classList.contains('show')) {
      //         myDropdown.classList.remove('show');
      //       }
      //   }
      //
      // }
      </script>
    </header>
