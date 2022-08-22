<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Usuario registrado</title>
</head>
<body> 
    <div class="container"> 
        <?php
        require("../vendor/autoload.php");
        use MyApp\Query\Ejecuta;
        $usuario = new Ejecuta();

        $us=$_GET['id'];
        
        extract($_POST);
         
        $cadena="INSERT INTO INSCRIP_GYM (TEL_EMERGENCIA, T_PAGO, FECHA_INSCRIP, USER_FK) VALUES('$telefono','Tarjeta','$fecha','$us')";

        $usuario->ejecutar($cadena);

        echo "<div class='alert alert=success'>CLIENTE INSCRITO</div>";
        header("refresh:1000 cliente/index_cliente.php");
        ?>
    </div>
</body>
</html>