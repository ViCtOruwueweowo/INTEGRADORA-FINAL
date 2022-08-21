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
<body>
<!--Menu-->

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            <form class="d-flex">


            <a class="nav-link active d-flex" aria-current="page" href="carrito/index.php">Productos</a>
            <a class="nav-link active d-flex" aria-current="page" href="carrito/ofertas.php">Ofertas</a>

        <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {

 echo  
            "<a class='nav-link active d-flex' href='../CERRARsesion.php'>Cerrar sesión</a>";
  echo          "<a class='nav-link active d-flex'>".$_SESSION["CORREO"]."</a>";

  }
  ?>
        
     
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

	if($_POST)
	{	
		$num1 = $_POST
		['Peso'];
		$num2 = $_POST
		['Altura'];
		$suma = ($num1 
		/ ($num2 * $num2));
		echo "<div style=color:white>".$suma."<div>"; 
	}
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
      <img src="img_cliente/inscripcion.jpg" alt="">
      <h3>INSCRIPCION</h3>
          </div>
          <div class="face back">
      <h3 style="color: orange;">!!INSCRIBETE AHORA¡¡</h3>
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
      <h3 style="color: orange;">!!SOMOS GYM CLUB¡¡</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
      <div class="link">
          <a href="../nosotros.php">Ir a conocenos</a>
      </div>
          </div>
          
        </div></td>
      </div>
      <!--Fin Cards-->
    