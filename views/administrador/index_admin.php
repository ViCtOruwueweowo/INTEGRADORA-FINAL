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
<body >
    <!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            <form class="d-flex">



            <a class="nav-link active d-flex" aria-current="page" href="agregarEMP.php">Empleados</a>

            <a class="nav-link active d-flex" aria-current="page" href="categoriasdulce.php">Categorias</a>

            <a class="nav-link active d-flex" aria-current="page" href="agregarproveedores.php">Proveedores</a>
<<<<<<< HEAD

            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Alta Categorias</a>

            <a class="nav-link active d-flex" aria-current="page" href="agregarproveedores.php">Alta Proveedores</a>
                     
            <a class="nav-link active" aria-current="page" href="agregarproducto.php">Alta Productos</a>
                  

            <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {

 echo  
            "<a class='nav-link active d-flex' href='../CERRARsesion.php'>Cerrar sesión</a>";
  echo          "<a class='nav-link active d-flex'>".$_SESSION["CORREO"]."</a>";

  }
  ?>
=======
   
</div>
</div>

            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>Categorias</a>

            <a class="nav-link active d-flex" aria-current="page" href="agregarproveedores.php"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>Proveedores</a>
>>>>>>> 3ff49f66ddc982c3434eec87dfea3b7c09031dbd
          
         
            </form>
          </div>
        </div>
      </nav>

</body>
</html>