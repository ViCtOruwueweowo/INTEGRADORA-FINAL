<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <form class="d-flex">
            <a class="nav-link active" aria-current="page" href="proveedor.php">Proveedor</a>
                <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                <a class="nav-link active" aria-current="page" href="modificar.php">Modificar</a>
                <a class="nav-link active" aria-current="page" href="pedido.php">Pedido</a>
            </form>
          </div>
        </div>
    </nav>
      <!---->

    <div class="container">
        <h1 align="center">Equipo deportivo</h1>
        <form action="" method="post">

<?php
use MyApp\Query\Select;
require("../../vendor/autoload.php");

$query = new Select();

$cadena = "SELECT PROVEEDOR.ID_PRO, PROVEEDOR.NOMBRE FROM proveedor";
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
    $consulta = new SELECT();
     

        $query = new select();

        $cadena= "SELECT PRODUCTOS.NOMBRE, PRODUCTOS.PRECIO_UNITARIO, PRODUCTOS.DESCUENTO, PRODUCTOS.EXISTENCIA, PROVEEDOR.NOMBRE AS PROV, PRODUCTOS.DESCRIPCION, PRODUCTOS.IMAGEN FROM PRODUCTOS INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CAT=PRODUCTOS.CATEGORIA INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=PRODUCTOS.PROV WHERE CATEGORIAS.NOMBRE='Equipo deportivo' and PROVEEDOR.ID_PRO='$proveedor'";
        
       
        $tabla = $query->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-success'>
        <tr>
        <th>PRODUCTO</th><th>PRECIO UNITARIO</th><th>DESCUENTO</th><th>EXISTENCIA</th><th>PROVEEDOR</th><th>DESCRIPCION</th><th>IMAGEN</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->PRECIO_UNITARIO </td>";
            echo "<td> $registro->DESCUENTO </td>";
            echo "<td> $registro->EXISTENCIA </td>";
            echo "<td> $registro->PROV </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "<td> $registro->IMAGEN </td>";
            echo "</tr>";
        } 

        echo "</body>";
        "</table>";

    }
    ?>
    </div>


    <div class="container">
        <h1 align="center">Bebidas</h1>

<form action="" method="post">

<?php
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
    $consulta = new SELECT();

        $query = new select();

        $cadena= "SELECT PRODUCTOS.NOMBRE, PRODUCTOS.PRECIO_UNITARIO, PRODUCTOS.DESCUENTO, PRODUCTOS.EXISTENCIA, PROVEEDOR.NOMBRE AS PROV, PRODUCTOS.DESCRIPCION, PRODUCTOS.IMAGEN FROM PRODUCTOS INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CAT=PRODUCTOS.CATEGORIA INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=PRODUCTOS.PROV WHERE CATEGORIAS.NOMBRE='Bebidas' and PROVEEDOR.ID_PRO='$proveedor'";
        
       
        $tabla = $query->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-success'>
        <tr>
        <th>PRODUCTO</th><th>PRECIO UNITARIO</th><th>DESCUENTO</th><th>EXISTENCIA</th><th>PROVEEDOR</th><th>DESCRIPCION</th><th>IMAGEN</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->PRECIO_UNITARIO </td>";
            echo "<td> $registro->DESCUENTO </td>";
            echo "<td> $registro->EXISTENCIA </td>";
            echo "<td> $registro->PROV </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "<td> $registro->IMAGEN </td>";
            echo "</tr>";
        } 

        echo "</body>";
        "</table>";

        
 }
        ?>
    </div>
    <div class="container">
        <h1 align="center">Suplementos</h1>

        <form action="" method="post">

<?php

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
    $consulta = new SELECT();

        $query = new select();

        $cadena= "SELECT PRODUCTOS.NOMBRE, PRODUCTOS.PRECIO_UNITARIO, PRODUCTOS.DESCUENTO, PRODUCTOS.EXISTENCIA, PROVEEDOR.NOMBRE AS PROV, PRODUCTOS.DESCRIPCION, PRODUCTOS.IMAGEN FROM PRODUCTOS INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CAT=PRODUCTOS.CATEGORIA INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=PRODUCTOS.PROV WHERE CATEGORIAS.NOMBRE='Suplementos'  and PROVEEDOR.ID_PRO='$proveedor'";
        
       
        $tabla = $query->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-success'>
        <tr>
        <th>PRODUCTO</th><th>PRECIO UNITARIO</th><th>DESCUENTO</th><th>EXISTENCIA</th><th>PROVEEDOR</th><th>DESCRIPCION</th><th>IMAGEN</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->PRECIO_UNITARIO </td>";
            echo "<td> $registro->DESCUENTO </td>";
            echo "<td> $registro->EXISTENCIA </td>";
            echo "<td> $registro->PROV </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "<td> $registro->IMAGEN </td>";
            echo "</tr>";
        } 

        echo "</body>";
        "</table>";

    }
    ?>
    </div>
</body>
</html>