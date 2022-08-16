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
        <h1 align="center">Empleados</h1>

        <?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT usuario.NOMBRES, usuario.APELLIDOS, usuario.DIRECCION, usuario.TELEFONO, usuario.CORREO, usuario.F_NAC FROM usuario WHERE usuario.NIVEL_USUARIO= 2;";


$tabla = $query->seleccionar($cadena);

echo "<center><table class='table table-hover'>
<thead class='table-dark'>
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Correo</th>
<th>F_NAC</th>

</tr>
</thead>
<body>";

foreach($tabla as $registro)
{
    echo "<tr>";

    echo "<td align='center'> $registro->NOMBRES </td>";
    echo "<td align='center'> $registro->APELLIDOS</td>";
    echo "<td align='center'> $registro->DIRECCION</td>";
    echo "<td align='center'> $registro->TELEFONO</td>";
    echo "<td align='center'> $registro->CORREO</td>";
    echo "<td align='center'> $registro->F_NAC</td>";

    echo "</tr>";
} 

echo "</body>";
"</table>
</center>";

?>

    </div>
</body>
</html>