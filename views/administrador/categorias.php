<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">CATEGORIAS</h1>

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_CAT, NOMBRE, DETALLE FROM CATEGORIA";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        fecha
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_CAT."'>".$value->NOMBRE."</option>";
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

        $cadena = "SELECT * FROM CATEGORIA";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        <th>Detalle</th>
        </tr>
        </thead>
        <body>";
        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->DETALLE</td>";
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