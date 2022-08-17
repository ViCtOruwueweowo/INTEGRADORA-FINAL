<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Compras de clientes</h1>


<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT  FECHA_VENTA FROM orden_venta";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        fecha
        </label>
        <select name='fecha' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->FECHA_VENTA."'>".$value->FECHA_VENTA."</option>";
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

        $cadena = "SELECT SI.NOMBRE FROM (SELECT distinct concat(U.NOMBRES,' ',U.APELLIDOS) AS NOMBRE from usuario as U INNER JOIN orden_venta on orden_venta.USUARIO=U.ID_US INNER JOIN detalle_orden_venta on detalle_orden_venta.ORDEN_VENTA=orden_venta.ID_VENTA INNER JOIN productos on productos.CVE_P=detalle_orden_venta.PRODUCTO WHERE orden_venta.FECHA_VENTA='$fecha') AS SI";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE</td>";
            echo "</tr>";
        }

        echo "</body>";
        "</table>";
        }
        ?>
    </div>

</body>
</html>
