<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\empleado\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>orden compra COMPLETA</title>
</head>
<body>
    <div class="container">
        <h1 align="center">orden compra COMPLETA</h1>

        <form action="" method="post">
<?php
use MyApp\Query\Select;
require("../../vendor/autoload.php");

$query = new Select();

$cadena = "SELECT PROVEEDOR.ID_PRO, PROVEEDOR.NOMBRE FROM PROVEEDOR";
$reg = $query->seleccionar($cadena);

echo "<div class='mb-3>'
<label class='control-label' >
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

        $cadena= "SELECT DETALLE_ORDEN_COMPRA.ORDEN_COMPRA, ORDEN_COMPRA.FECHA, USUARIO.NOMBRES, PRODUCTOS.NOMBRE AS PROD, DETALLE_ORDEN_COMPRA.CANTIDAD, DETALLE_ORDEN_COMPRA.P_PROV, (DETALLE_ORDEN_COMPRA.CANTIDAD*DETALLE_ORDEN_COMPRA.P_PROV) AS PT, PROVEEDOR.NOMBRE FROM ORDEN_COMPRA INNER JOIN USUARIO ON USUARIO.ID_US=ORDEN_COMPRA.USUARIO INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=ORDEN_COMPRA.PROVEEDOR INNER JOIN DETALLE_ORDEN_COMPRA ON ORDEN_COMPRA.ID_COMPRA=DETALLE_ORDEN_COMPRA.ORDEN_COMPRA INNER JOIN PRODUCTOS ON PRODUCTOS.CVE_P=DETALLE_ORDEN_COMPRA.PRODUCTO WHERE PROVEEDOR.ID_PRO=$proveedor";
        
       
        $tabla = $query->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>ORDEN DE COMPRA</th>
        <th>FECHA COMPRA</th>
        <th>EMPLEADO</th>
        <th>PRODUCTO</th>
        <th>CANTIDAD</th>
        <th>PRECIO PROVEEDOR</th>
        <th>PRECIO TOTAL</th>
        <th>PROVEEDOR</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr style='color:white'>";
            echo "<td> $registro->ORDEN_COMPRA </td>";
            echo "<td> $registro->FECHA </td>";
            echo "<td> $registro->NOMBRES </td>";
            echo "<td> $registro->PROD </td>";
            echo "<td> $registro->CANTIDAD </td>";
            echo "<td> $registro->P_PROV </td>";
            echo "<td> $registro->PT </td>";
            echo "<td> $registro->NOMBRE </td>";
            echo "</tr>";
        } 

        echo "</body>";
        "</table>";

    }
        ?>

    </div>
</body>
</html>