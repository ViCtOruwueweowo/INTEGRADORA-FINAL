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

<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT USUARIO.ID_US, CONCAT (USUARIO.NOMBRES,' ', USUARIO.APELLIDOS) AS USUARIO, INSCRIP_GYM.FECHA_INSCRIP AS FECHA_INSCRIPCION, PAGO_MENSUALIDAD.FECHA_PAGO AS PAGO_MENSUALIDAD, PAGO_MENSUALIDAD.FECHA_TERMINACIO AS FECHA_FINALIZACION FROM USUARIO INNER JOIN INSCRIP_GYM ON USUARIO.ID_US=INSCRIP_GYM.USER_FK INNER JOIN PAGO_MENSUALIDAD ON PAGO_MENSUALIDAD.USER_INSCRIT=INSCRIP_GYM.ID_IG;";


$tabla = $query->seleccionar($cadena);

echo "<center><table class='table table-hover'>
<thead class='table-dark'>
<tr>
<th>Nombre</th>
<th>Fecha de inscripcion</th>
<th>Pago de mensualidad</th>
<th>Fecha de finalizacion</th>
</tr>
</thead>
<body>";

foreach($tabla as $registro)
{
echo "<tr>";

echo "<td align='center'> $registro->USUARIO</td>";
echo "<td align='center'> $registro->FECHA_INSCRIPCION</td>";
echo "<td align='center'> $registro->PAGO_MENSUALIDAD</td>";
echo "<td align='center'> $registro->FECHA_FINALIZACION</td>";
echo "</tr>";
} 

echo "</body>";
"</table>
</center>";

?>

</div>
</body>
</html>