<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">

    <title>Document</title>
</head>
<body>
<h1 align="center">EMPLEADOS</h1>

<form action="#" method="post">
<?php

use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_US, NOMBRES, APELLIDOS, DIRECCION, TELEFONO, CORREO FROM USUARIO WHERE USUARIO.NIVEL_USUARIO=2";

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
        <button type="submit" class="btn btn-lg btn-primary">Ver</button>
        </form>
        <br><br>
        
        <?php
        if($_POST)
        {
        extract($_POST);
        $consulta = new SELECT();

        $cadena = "SELECT * FROM USUARIO where USUARIO.ID_US=$nombre";
        $tabla = $consulta->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th  style='color:white'>Nombre</th>
        <th  style='color:white'>Apellidos</th>
        <th  style='color:white'>Direccion</th>
        <th  style='color:white'>Telefono</th>
        <th  style='color:white'>Correo</th>
        <th  style='color:white'>Modificar</th>
        <th  style='color:white'>Descripcion</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr style=' background: rgba(109, 107, 107, 0.544);
            font-size: 22px;color:white'>";
            echo "<td> $registro->NOMBRES</td>";
            echo "<td> $registro->APELLIDOS</td>";
            echo "<td> $registro->DIRECCION</td>";
            echo "<td> $registro->TELEFONO</td>";
            echo "<td> $registro->CORREO</td>";
            "</tr>";
?>
            <td><a href='editaremp.php?id=<?php echo $registro->ID_US ?>' class="btn btn-secondary">Modificar</a></td>
<?php
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