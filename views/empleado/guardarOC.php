<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container">

    <?php
    use MyApp\Query\Ejecuta;
    require("../../vendor/autoload.php");

    $insert = new Ejecuta();

    extract($_POST);

    $cadena="INSERT INTO ORDEN_COMPRA (FECHA, USUARIO, PROVEEDOR) VALUES ('$fecha','$nombre','$proveedor')";

    $insert->ejecutar($cadena);

    echo "<div class='alert alert-success'>
    ORDEN DE COMPRA REGISTRADA</div>";

    header("refresh:3; formLLENADO_DOC.php"); 

    ?>
    </div>

</body>
</html>