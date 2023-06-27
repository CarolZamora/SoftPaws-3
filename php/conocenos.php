<?php
include '../config/database.php';

$query = mysqli_query($conexion,"SELECT * From perfiladoptame");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/conocenos.css"/>
    <link rel="stylesheet" href="boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/SoftPaws (1).ico" type="image/x-icon" />
    <title>Conocenos</title>

    
<body>
    <header>
        <a href="#" class="logo-nav"><img src="../img/paw-solid.svg"><span>SoftPaws</span>
</a>
<ul class="navbar-conocenos">
    <li><a href="Home.html" class="activo">Home</a></li>
    <li><a href="#">Contactanos</a></li>
    <li><a href="#" >Servicios</a></li>
    <li><a href="#" >Historias</a></li>
</ul>
<div class="principal">
    <a href="#" class="usuario"><i class="ri-user-fill"></i>Iniciar sesion</a>
    <a href="#">Registrate</a>
    <div class="menu-icon" id="menu"onclick="toggleMenu()"><i class="ri-menu-line"></i></div>
</div>


</header>

<div class="buscar">
<div class="input-box">
  <input type="text" placeholder="Buscar...">
  <span class="busqueda">
  <i class="ri-search-line buscar-icon"></i>
  </span>
  <i class="ri-close-line cerrar-icon"></i>
</div>
</div>


<div class="container-adop">
<section id="seccion-adoptanos">
        <div class="adoptanos">
            <div class="adop">

                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
                  
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button>Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src=""  alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
                    
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
              
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>

                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
               
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
             
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
            
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
               
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
            <div class="adop">
                <div class="image">
                    <img src="../img/perfil1.jpg" alt="">
                </div>
                <div class="namePaws">
                    <h3>Huesito</h3>
                 
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="boton">
                    <button> Conoceme</button>
                </div>
            </div>
        </div>
</setion>
</div>--->



<footer>
  <img src="../img/logo-h.png" alt="logo" class="logo">
  <div class="social-icons-container">
    <a href="facebook.com">
    <img class="social-icon" src="../img/instagram.png" alt=""></a>
    <a href="">
      <img class="social-icon" src="../img/instagram.png" alt=""></a>
      <a href="">
        <img class="social-icon" src="../img/youtube.png" alt=""></a>
    

  </div>

  <ul class="footer-menu-container">
    <li class="menu-item">cookies</li>
    <li class="menu-item">Privacidad</li>
    <li class="menu-item">legal</li>
  </ul>
  <span class="copyright">&copy;2023, SoftPaws. Todos los derechos reservados.</span>
</footer>



    
    

<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
<script type="text/javascript">
      window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("abajo",window.scrollY>0);
      })
  </script>

<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>





