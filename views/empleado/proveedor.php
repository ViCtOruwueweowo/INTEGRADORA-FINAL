<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\empleado\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">

    <title>Document</title>
</head>
<body>
<h1 align="center">PROVEEDORES</h1>

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_PRO, NOMBRE, DIRECCION, CORREO, TELEFONO, CIUDAD FROM PROVEEDOR";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        NOMBRE:
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_PRO."'>".$value->NOMBRE."</option>";
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

        $cadena = "SELECT * FROM PROVEEDOR where PROVEEDOR.ID_PRO=$nombre";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        </tr>
        </thead>
        <body>";
        foreach($tabla as $registro)
        {
            echo "<tr style='color:white'>";
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->DIRECCION</td>";
            echo "<td> $registro->CORREO</td>";
            echo "<td> $registro->TELEFONO</td>";
            echo "<td> $registro->CIUDAD</td>";

?>
<?php
            echo "</tr>";
        }
        echo "</body>";
        "</table>";
        }
        ?>
</body>
</html>