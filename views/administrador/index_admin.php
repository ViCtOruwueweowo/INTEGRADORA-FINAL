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



            <a class="nav-link active d-flex" aria-current="page" href="productos.php">Productos</a>

            <a class="nav-link active d-flex" aria-current="page" href="categoriasdulce.php">Categorias</a>

            <a class="nav-link active d-flex" aria-current="page" href="proveedores.php">Proveedores</a>

            <a class="nav-link active d-flex" aria-current="page" href="empleados.php">Empleados</a>

            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Alta Categorias</a>

            <a class="nav-link active d-flex" aria-current="page" href="agregarproveedores.php">Alta Proveedores</a>
                     
            <a class="nav-link active" aria-current="page" href="agregarproducto.php">Alta Productos</a>

            <a class="nav-link active" aria-current="page" href="agregarEMP.php">Alta Empleados</a>

                  

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
            </form>
          </div>
        </div>
      </nav>
</body>
</html>