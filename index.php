<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SCRIPS Y CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/tablas.css">
    <link rel="stylesheet" href="css/cartas.css">
    <!---->
    <style>
      #carousel1{
        margin-top: 10px;
          text-align:center;
      }
    #carouselimage{
      
      height: 400px;
        text-align:center;
        width: 100%;
      }
    </style>
    <title>Document</title>
</head>
<body  style="background-image:url(https://www.xtrafondos.com/descargar.php?id=4052&resolucion=3840x2160)">
    <!--Menu-->

    <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {
    echo "<h5 align='right'>Usuario: ".$_SESSION["CORREO"]."</h5>";
    echo "<h6 align='right'>
    <a href='views/CERRARsesion.php'>[Cerrar sesión]</a>
    </h6>";
  }
  ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,#7c0078, rgb(235, 227, 227)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>

            <?php
        
        if(!isset($_SESSION["CORREO"]))
        {
            "<a class='nav-link active d-flex' aria-current='page' href='views/administrador/index_admin.php'><svg xmlns='http://www.w3.org/2000/svg' width='19' height='30' fill='currentColor' class='bi bi-file-earmark-person' viewBox='0 0 16 16'>
            <path d='M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
             <path d='M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z'/>
            </svg> Administrador</a>
            </li>";
        } 
        ?>
         <?php
        
        if(!isset($_SESSION["CORREO"]))
        {
            "<a class='nav-link active d-flex' aria-current='page' href='views/empleado/index_emp.php'><svg xmlns='http://www.w3.org/2000/svg' width='19' height='30' fill='currentColor' class='bi bi-people' viewBox='0 0 16 16'>
            <path d='M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z'/>
            </svg>Empleado</a>
            </li>";
          } 
        ?>
            <form class="d-flex">

                <a class="nav-link active d-flex" aria-current="page" href="views/ofertas.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>Ofertas</a>
                <a class="nav-link active" aria-current="page" href="http://localhost/APLICACIONES_WEB_3B/The%20box%20club/views/ofertas.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z"/>
                  </svg> Productos</a>
                       
      <?php
        
        if(!isset($_SESSION["CORREO"]))
        {
          echo "<a class='nav-link active' aria-current='page' href='views/loginapp.php'><svg xmlns='http://www.w3.org/2000/svg' width='19' height='30' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
          <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
          <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
        </svg>Iniciar sesión</a>
          </li>";
        }
        ?>
          <?php
        
        if(!isset($_SESSION["CORREO"]))
        {
                "<a class='nav-link active' aria-current='page' href='views/carrito.php'><svg xmlns='http://www.w3.org/2000/svg' width='19' height='30' fill='currentColor' class='bi bi-cart2' viewBox='0 0 16 16'>
                    <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                  </svg> Mi Carrito</a>
                  </li>";
                }
                ?>
            </form>
          </div>
        </div>
      </nav>
      <!---->
<br>

      <!--Contenedor-->
<div class="container" style="background-color: rgba(255, 255, 255, 0);">
<!--Carrusel de imagenes-->
<div style="padding-top: 15px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#"><img style="cursor: pointer;" src="img/img.jpg" class="d-block w-100" width="1900" height="450"></a>
    </div>
    <!---->
    <div class="carousel-item">
      <a href=""><img src="img/img2.png" class="d-block w-100" width="1900" height="450"></a>
    </div>
    <!---->
    <div class="carousel-item">
      <a href=""><img src="https://www.inacua.com/lagranja/wp-content/uploads/sites/60/2022/05/Web-Home-Campana-Este-verano-nos-vemos-las-caras-Inacua-La-Granja.jpg" class="d-block w-100" alt="..." width="1900" height="450"></a>
    </div>
  
  <!---->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <!---->
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>

</div>
      <!--Fin contenedor-->


      <!--IMC-->
<div class="container">
  <br>
  <div class="container" style="background-color: transparent; border-color:transparent ;">
    <h3 style="font-family:century gothic;color: white;font-size:50px;text-align:center"><b>IMC</b></h3>
    <div class="container" style="border: transparent;background-color: transparent;">
    <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;color: white;text-align:center">El índice de masa corporal (IMC) es un número que se calcula con base en el peso y la estatura de la persona. Para la mayoría de las personas, el IMC es un indicador confiable de la gordura y se usa para identificar las categorías de peso que pueden llevar a problemas de salud.</p></div>
   <br>
    <div class="container" style="background-color: transparent; border-color:transparent ;text-align: center;">
      <h3 style="font-family:century gothic;color: white;font-size:25px;text-align:center"><b>¿Quieres Calcular Tu IMC?</b></h3>
    <form action="" method="post">
      <h4 style="color: white;text-align: center;"> Ingrese Su Altura</h4>
      <input type="text" name="Altura" id="" style="width: 350px;" placeholder="Altura. . ." value="">
      <br>
      <h4 style="color: white;text-align: center;"> Ingrese Su Peso</h4>
      <input type="text" name="Peso" id="" style="width: 350px;" placeholder="Peso. . ." value="">
      <br>
      <input type="submit" value="Calcular" style="background-color:rgb(95, 95, 174) ;border: transparent;color: white;width: 150px; height: 35px;margin: 5px;">

    </form> 
    <br>
    <h5 style="font-family:century gothic;color: white;text-align:center">¡No Te Vayas Aqui Esta Tu Resultado!</h5>
    <?php
$altura= $_POST['Altura'];
$peso= $_POST['Peso'];
$imc = $peso/($altura^2);
echo "<div style=color:white>TU IMC ES DE: .$imc";
echo"</div>";

              ?>
    <br>
    <div class="container" style="background-color: transparent;border:transparent">
      <table >
               
        <tr>
            <th colspan="100%" style="color:white">INDICE DE MASA CORPORAL</th>
        </tr>
        <tr>
            <td style="color:white">Insuficiencia ponderal</td>
            <td style="color:white"><18.5</td>
         </tr>
         <tr>
            <td style="color:white">Intervalo normal</td>
            <td style="color:white">18.5-24.9</td>
         </tr>
         <tr>
            <td style="color:white">Sobrepeso</td>
            <td style="color:white">25.0</td>
         </tr>
         <tr>
            <td style="color:white">Preobesidad</td>
            <td style="color:white">>30.0</td>
         </tr>
         <tr>
            <td style="color:white">Obecidad clase l</td>
            <td style="color:white">30.0-34.9</td>
         </tr>
         <tr>
            <td style="color:white">Obecidad Clase ll</td>
            <td style="color:white">35.0-39.9</td>
         </tr>
 <tr>
    <td style="color:white">Obecidad Clase lll</td>
    <td style="color:white">>40.0</td>
 </tr>
</table>
    </div>
  </div>
  </div>
      <!---->

      <!--Cards-->
      <div class="container" style="display: flex;align-items:center;justify-content: center;min-height: 200px;background-color:transparent;">
        <td ><div class="card">
          <div class="face front">
      <img src="https://fvandina.com/wp-content/uploads/2020/05/promociones.jpg" alt="">
      <h3>OFERTAS</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">!!DISFRUTA DE GRANDES OFERTAS¡¡</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="views/ofertas.php">Ir a Ofertas</a>
      </div>
          </div>
        </div></td>
        <td ><div class="card">
          <div class="face front">
      <img src="img/inscripcion.jpg" alt="">
      <h3>INSCRIPCION</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">!!INSCRIBETE AHORA¡¡</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="views/inscripciongym.php">Ir a Inscripcion</a>
      </div>
          </div>
          
        </div></td>
        <td ><div class="card">
          <div class="face front">
      <img src="https://www.lifefitness-latinamerica.com/resource/image/777204/portrait_ratio1x1/600/600/d7dfae1242ae38425be3d8cbc420dd89/Ef/axiom-series.jpg" alt="">
      <h3>CONOCENOS</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">!!SOMOS GYM CLUB¡¡</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="views/nosotros.php">Ir a conocenos</a>
      </div>
          </div>
          
        </div></td>
      </div>
      <!--Fin Cards-->
    
</body>
</html>