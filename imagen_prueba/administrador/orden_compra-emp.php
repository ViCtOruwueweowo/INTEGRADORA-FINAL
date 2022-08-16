<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 align="center">Ordenes de compra</h1>

        <?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT concat (U.NOMBRES,' ',U.APELLIDOS) as EMPLEADO, P.NOMBRE as PROVEEDOR, OC.FECHA as FECHA_COMPRA, PRO.NOMBRE as NOM_PRODUCTO FROM usuario as U inner join orden_compra as OC on U.ID_US=OC.USUARIO inner join proveedor as P on OC.PROVEEDOR=P.ID_PRO inner join detalle_orden_compra as DOC on DOC.ORDEN_COMPRA=OC.ID_COMPRA inner join productos as PRO on DOC.PRODUCTO=PRO.CVE_P WHERE U.NIVEL_USUARIO='2';";


$tabla = $query->seleccionar($cadena);

echo "<center><table class='table table-hover'>
<thead class='table-dark'>
<tr>
<th>Empleado</th>
<th>Proveedor</th>
<th>Fecha de compra</th>
<th>Nombre del producto</th>
</tr>
</thead>
<body>";

foreach($tabla as $registro)
{
    echo "<tr>";

    echo "<td> $registro->EMPLEADO </td>";
    echo "<td> $registro->PROVEEDOR</td>";
    echo "<td> $registro->FECHA_COMPRA</td>";
    echo "<td> $registro->NOM_PRODUCTO</td>";
    echo "</tr>";
} 

echo "</body>";
"</table>
</center>";

?>

    </div>
</body>
</html>