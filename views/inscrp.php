<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="GUARDINSCRIP.php">

<?php

use MyApp\Query\select;
require("../vendor/autoload.php");
extract($_POST);

$query = new select();

$cadena= "SELECT ID_US, NOMBRES FROM USUARIO WHERE USUARIO.CORREO='$user'";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        NOMBRE:
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_US."'>".$value->NOMBRES."</option>";
        }
        echo "</select>
        </div>";
        ?>
        <td><a href='GUARDINSCRIP.php' class="btn btn-secondary">Confirmar</a></td>
    </form> 
</body>
</html>