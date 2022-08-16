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

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT  ID_US ,NOMBRES FROM USUARIO WHERE USUARIO.NIVEL_USUARIO='1'";

$reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        fecha
        </label>
        <select name='nombre' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_US."'>".$value->NOMBRES."</option>";
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

        $cadena = "SELECT USUARIO.ID_US, CONCAT (USUARIO.NOMBRES,' ', USUARIO.APELLIDOS) AS USUARIO, INSCRIP_GYM.FECHA_INSCRIP AS FECHA_INSCRIPCION, PAGO_MENSUALIDAD.FECHA_PAGO AS PAGO_MENSUALIDAD, PAGO_MENSUALIDAD.FECHA_TERMINACIO AS FECHA_FINALIZACION FROM USUARIO INNER JOIN INSCRIP_GYM ON USUARIO.ID_US=INSCRIP_GYM.USER_FK INNER JOIN PAGO_MENSUALIDAD ON PAGO_MENSUALIDAD.USER_INSCRIT=INSCRIP_GYM.ID_IG WHERE inscrip_gym.USER_FK='$nombre' and usuario.NIVEL_USUARIO='1'";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
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
            echo "<td> $registro->USUARIO</td>";
            echo "<td> $registro->FECHA_INSCRIPCION</td>";
            echo "<td> $registro->PAGO_MENSUALIDAD</td>";
            echo "<td> $registro->FECHA_FINALIZACION</td>";
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