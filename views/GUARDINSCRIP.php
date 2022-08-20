<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Usaurio registrado</title>
</head>
<body>
    <div class="container"> 
        <?php
        use MyApp\Query\ejecuta;
        require("../vendor/autoload.php");
        extract($_POST);
        extract($_POST);
        $usfk='USER_FK';
        $cadena="INSERT INTO INSCRIP_GYM (TEL_EMERGENCIA, T_PAGO, FECHA_INSCRIP, USER_FK) VALUES('$telefono','$metodo','$fecha','$telefono','$usfk')";
        $user->ejecutar($cadena);
        echo "<div class='alert alert=success'>CLIENTE INSCRITO</div>";
        header("refresh:40 loginapp.php");
        ?>
    </div>
</body>
</html>