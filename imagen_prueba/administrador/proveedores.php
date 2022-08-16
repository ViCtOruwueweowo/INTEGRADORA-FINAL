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
<h1 align="center">PROVEEDORES</h1>
<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT NOMBRE FROM PROVEEDOR";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        fecha
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

        $cadena = "SELECT * FROM PROVEEDOR WHERE PROVEEDOR.NOMBRE='$prov'";
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
            echo "<tr>";
            echo "<td align='center'> $registro->NOMBRE</td>";
            echo "<td align='center'> $registro->DIRECCION</td>";
            echo "<td align='center'> $registro->CORREO</td>";
            echo "<td align='center'> $registro->TELEFONO</td>";
            echo "<td align='center'> $registro->CIUDAD</td>";
            echo "</tr>";
        }
        echo "</body>";
        "</table>";
        }
        ?>
    </div>
</body>
</html>