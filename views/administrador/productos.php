<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\administrador\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">

    <title>Document</title>
</head>
<body>
<h1 align="center">PRODUCTOS</h1>

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT CVE_P, NOMBRE, PRECIO_UNITARIO, DESCUENTO, EXISTENCIA, CATEGORIA, PROV, DESCRIPCION FROM PRODUCTOS";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        NOMBRE:
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->CVE_P."'>".$value->NOMBRE."</option>";
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

        $cadena = "SELECT PRODUCTOS.CVE_P,PRODUCTOS.NOMBRE,PRODUCTOS.PRECIO_UNITARIO,PRODUCTOS.DESCUENTO,PRODUCTOS.EXISTENCIA,CATEGORIAS.NOMBRE AS NOM_C,PROVEEDOR.NOMBRE AS NOM_P,PRODUCTOS.DESCRIPCION FROM PRODUCTOS INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=PRODUCTOS.PROV INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CAT=PRODUCTOS.CATEGORIA where PRODUCTOS.CVE_P=$nombre";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th  style='color:white'>Nombre</th>
        <th  style='color:white'>Precio</th>
        <th  style='color:white'>Descuento</th>
        <th  style='color:white'>Existencia</th>
        <th  style='color:white'>Categoria</th>
        <th  style='color:white'>Proveedor</th>
        <th  style='color:white'>Descripcion</th>
        </tr>
        </thead>
        <body>";
        foreach($tabla as $registro)
        {
            echo "<tr style='color:white'>";
            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->PRECIO_UNITARIO</td>";
            echo "<td> $registro->DESCUENTO</td>";
            echo "<td> $registro->EXISTENCIA</td>";
            echo "<td> $registro->NOM_C</td>";
            echo "<td> $registro->NOM_P</td>";
            echo "<td> $registro->DESCRIPCION</td>";

?>
            <td><a href='editarpro.php?id=<?php echo $registro->CVE_P?>' class="btn btn-secondary">Modificar</a></td>
<?php
            echo "</tr>";
        }
        echo "</body>";
        "</table>";
        }
        ?>
</body>
</html>