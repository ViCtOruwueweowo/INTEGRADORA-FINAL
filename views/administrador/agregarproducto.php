<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 50%; margin:auto;">
        <h3>Registro de Productos</h3>
        <hr>
        <form action="guardarproducto.php" method="post">
            <fieldset>
                <legend>Alta Proveedor</legend> 
                <br>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="producto"  required placeholder=" "> <br><br>

                <label for="Fecha">PRECIO:</label>
                <input type="text" name="precio"  required placeholder=" "> <br><br>
                
                <label for="Fecha">DESCUENTO:</label>
                <input type="text" name="descuento"  required placeholder=" "> <br><br>
                
                <label for="Nombre">EXISTENCIAS:</label>
                <input type="text" name="existencia" required placeholder=" "> <br><br>
        

                <?php

use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_CAT, NOMBRE, DETALLE FROM categorias";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        CATEGORIA
        </label>
        <select name='categ' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_CAT."'>".$value->NOMBRE."</option>";
        }
        echo "</select>
        </div>";

                ?>
<br>

<?php

require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT PROVEEDOR.ID_PRO, PROVEEDOR.NOMBRE FROM PROVEEDOR";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
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


                <label for="Fecha">DESCRIPCION:</label>
                <input type="text" name="descripcion"  required placeholder=" "> <br><br>

                <input class="boton" type="submit" value="Guardar" name="Guardar">
        </form>
</div>
</body>
</html>