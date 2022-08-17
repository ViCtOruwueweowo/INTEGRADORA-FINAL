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
        <h1 align="center">Empleados-Proveedores</h1>

        <?php

use MyApp\Query\select;
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
</body>
</html>