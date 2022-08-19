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
        <?php
        use MyApp\Query\Ejecuta; 
        require("../../vendor/autoload.php");

        $usuario = new Ejecuta();
        extract($_POST);

        $cadena="INSERT INTO PRODUCTOS (NOMBRE,PRECIO_UNITARIO,DESCUENTO,EXISTENCIA,CATEGORIA,PROV,DESCRIPCION) 
        VALUES('$producto','$precio','$descuento','$existencia','$categ','$proveedor' ,'$descripcion')";

        $usuario->ejecutar($cadena);

        echo "<div class='alert alert=success'>CATEGORIA REGISTRADA</div>";
        header("refresh:3 ../administrador/index_admin.php");
        ?>
    </div>
</body>
</html>