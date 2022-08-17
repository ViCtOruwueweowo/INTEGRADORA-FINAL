<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SCRIPS Y CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../css/tablas.css">
    <link rel="stylesheet" href="../../css/cartas.css">
    <link rel="stylesheet" href="css/fondo.css">

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
<body style="background-image:img_cliente/">
    <!--Menu-->

    <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {
    echo "<h5 align='right'>Usuario: ".$_SESSION["CORREO"]."</h5>";
    echo "<h6 align='right'>
    <a href='../CERRARsesion.php'>[Cerrar sesión]</a>
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
            <form class="d-flex">
          
            <a class="nav-link active d-flex" aria-current="page" href="../inscripciongym.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>Inscripcion</a>
           
            <a class="nav-link active d-flex" aria-current="page" href="../ofertas.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>Ofertas</a>
           

            <a class="nav-link active d-flex" aria-current="page" href="../productos.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>Productos</a>

            <a class="nav-link active d-flex" aria-current="page" href="../carrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>Mi Carrito</a>
           
            <a class="nav-link active d-flex" aria-current="page" href="agregarEMP.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>  Yo</a>
           
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
      <a href="#"><img style="cursor: pointer;" src="img_cliente/img.jpg" class="d-block w-100" width="1900" height="450"></a>
    </div>
    <!---->
    <div class="carousel-item">
      <a href=""><img src="img_cliente/img2.png" class="d-block w-100" width="1900" height="450"></a>
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
      <h3 style="color: orange;">¡¡DISFRUTA DE GRANDES OFERTAS!!</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="../ofertas.php">Ir a Ofertas</a>
      </div>
          </div>
        </div></td>
        <td ><div class="card">
          <div class="face front">
      <img src="img_cliente/inscripcion.jpg" alt="">
      <h3>INSCRIPCION</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">¡¡INSCRIBETE AHORA!!</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="../inscripciongym.php">Ir a Inscripcion</a>
      </div>
          </div>
          
        </div></td>
        <td ><div class="card">
          <div class="face front">
      <img src="https://www.lifefitness-latinamerica.com/resource/image/777204/portrait_ratio1x1/600/600/d7dfae1242ae38425be3d8cbc420dd89/Ef/axiom-series.jpg" alt="">
      <h3>CONOCENOS</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">¡¡SOMOS GYM CLUB!!</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="../nosotros.php">Ir a conocenos</a>
      </div>
          </div>
          
        </div></td>
      </div>
      <!--Fin Cards-->
    
</body>
</html>