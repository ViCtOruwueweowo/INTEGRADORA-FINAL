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

</div>
</div>

            </form>
          </div>
        </div>
      </nav>

      <?php

use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_CAT, NOMBRE, DETALLE FROM categorias";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        CATEGORIAs
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_CAT."'>".$value->NOMBRE."</option>";
        }
        echo "</select>
        </div>";
        ?>
        <button type="submit" class="btn btn-lg btn-primary">Ver</button>
        </form>
        <br><br>
        
        <?php
        if($_POST)
        {
        extract($_POST);
        $consulta = new SELECT();

        $cadena = "SELECT * FROM categorias where categorias.id_cat=$nombre";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Modificar</th>
        <th>Registrar</th>
        </tr>
        </thead>
        <body>";
        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->DETALLE</td>";
?>
            <td><a href='editarcategoria.php?id=<?php echo $registro->ID_CAT ?>' class="btn btn-secondary">Modificar</a></td>
            <td><a href='agregarcategoria.php?id=$registro->ID_CAT'></a></td>
<?php
            echo "</tr>";
        }
        echo "</body>";
        "</table>";
        }
        ?>
    </div>
</div>

</body>
</html>