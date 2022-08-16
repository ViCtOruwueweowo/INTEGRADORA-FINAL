<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>ver Productos</title>
</head>
<body>
    <div class="container">
        <h1 align="center">PRODUCTOS</h1>  
        <?php

        use MyApp\Query\select;
        require("vendor/autoload.php");

        $query = new select();

        $cadena= "SELECT PRECIO_UNITARIO FROM PRODUCTOS";

        $reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        Precio:
        </label>
        <select name='precio' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->PRECIO_UNITARIO."'>".$value->PRECIO_UNITARIO."</option>";
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

        $cadena = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS.PRECIO_UNITARIO='$precio'";
        $tabla = $consulta->seleccionar($cadena);

        echo "<center><table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th>
        <th>Precio unitario</th>
        <th>descuento/th>
        <th>existencia</th>
        <th>descripcion</th>
        </tr>
        </thead>
        <body>";

        foreach($tabla as $registro)
        {
            echo "<tr>";

            echo "<td> $registro->NOMBRE</td>";
            echo "<td> $registro->PRECIO_UNITARIO </td>";
            echo "<td> $registro->DESCUENTO </td>";
            echo "<td> $registro->EXISTENCIA </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "</tr>";
        } 
        echo "</body>";
        "</table>";
        }
        ?>
    </div>
</body>
</html>