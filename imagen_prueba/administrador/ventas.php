<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Clientes inscritos</h1>

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT NOMBRE FROM productos";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        Nombre del producto
        </label>
        <select name='producto' class='form-select'>";
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

        $cadena = "SELECT productos.NOMBRE, productos.EXISTENCIA as Existentes, detalle_orden_venta.CANTIDAD   as Vendidos, detalle_orden_compra.CANTIDAD as  Comprados FROM productos inner join detalle_orden_compra on productos.CVE_P=detalle_orden_compra.PRODUCTO  inner join detalle_orden_venta on productos.CVE_P=detalle_orden_venta.PRODUCTO WHERE productos.NOMBRE='$producto'";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        <th>Existentes</th>
        <th>Vendidos</th>
        <th>Comprados</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->Existentes</td>";
            echo "<td> $registro->Vendidos</td>";
            echo "<td> $registro->Comprados</td>";
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