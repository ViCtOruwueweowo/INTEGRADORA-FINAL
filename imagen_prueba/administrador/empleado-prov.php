<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
        <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,#7c0078, rgb(235, 227, 227)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.php" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              
              </li>
            </ul>
            
          </div>
        </div>
    </nav>
      <!---->
      <div class="container">
      <h1 align="center">orden compra</h1>
      <form action="" method="post">

      <?php
use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new Select();

$cadena = "SELECT PROVEEDOR.ID_PRO, PROVEEDOR.NOMBRE FROM PROVEEDOR";
$reg = $query->seleccionar($cadena);

echo "<div class='mb-3>'
<label class='control-label'>
PROVEEDOR
</label>
<select name='proveedor' class='form-select'>";
foreach($reg as $value)
{
    echo "<option value='".$value->ID_PRO."'>".$value->NOMBRE."</option>";
}
echo "</select>
</div>";

?>
<br>
<button type="submit" class="btn btn-lg btn-primary">Ver</button>
</form>
<br><br>


        <?php

        if($_POST)
    {
        extract($_POST);
        $query = new select();
        $cadena= "SELECT ORDEN_COMPRA.FECHA, USUARIO.NOMBRES, PROVEEDOR.NOMBRE FROM ORDEN_COMPRA INNER JOIN USUARIO ON USUARIO.ID_US=ORDEN_COMPRA.USUARIO INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=ORDEN_COMPRA.PROVEEDOR=''";
        $tabla = $query->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-warning'>
        <tr>
        <th>FECHA</th><th>USUARIO</th><th>PROVEEDOR</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            
            echo "<td> $registro->FECHA </td>";
            echo "<td> $registro->NOMBRES </td>";
            echo "<td> $registro->NOMBRE </td>";

            echo "</tr>";
        } 

        echo "</body>";
        "</table>";
      }
?>
    </div>

    <title>Document</title>
</head>
<body>   
<div class="container">
        <h1 align="center">Empleados-Proveedores</h1>

        <?php

require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT NOMBRE from proveedor";

$reg = $query->seleccionar($cadena);

echo "<div class='mb-3>'
        <label class='control-label'>
        Proveedor
        </label>
        <select name='prov' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->NOMBRE."'>".$value->NOMBRE."</option>";
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


        $cadena= "SELECT distinct concat (U.NOMBRES,' ',U.APELLIDOS) as EMPLEADO, P.NOMBRE as PROVEEDOR FROM usuario as U inner join orden_compra as OC on U.ID_US=OC.USUARIO inner join proveedor as P on OC.PROVEEDOR=P.ID_PRO WHERE U.NIVEL_USUARIO='2' and proveedor.NOMBRE='$prov'";





echo "<center><table class='table table-hover'>
<thead class='table-dark'>
<tr>
<th>Empleado</th>
<br>
<th>Proveedor</th>
</tr>
</thead>
<body>";

foreach($tabla as $registro)
{
    echo "<tr>";
    echo "<td> $registro->EMPLEADO </td>";
    echo "<td> $registro->PROVEEDOR</td>";
    echo "</tr>";
} 

echo "</body>";
"</table>
</center>";
        }
?>

    </div>
>>>>>>> a08574a762221966c2a9fb0b98cfe4bedb7b274b
</body>
</html>