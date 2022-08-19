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
        use MyApp\Query\Select; 
        require("../vendor/autoload.php");

        $usuario = new Seleccionar();
        extract($_POST);
        $usfk="SELECT USUARIO.ID_US FROM USUARIO INNER JOIN INSCRIP_GYM ON USUARIO.ID_US=INSCRIP_GYM.USER_FK";
        $cadena="INSERT INTO INSCRIP_GYM (TEL_EMERGENCIA, T_PAGO, FECHA_INSCRIP, USER_FK) VALUES('$telefono','$metodo','$fecha','$telefono','$usfk')";

        $usuario->ejecutar($cadena);

        echo "<div class='alert alert=success'>CLIENTE INSCRITO</div>";
        header("refresh:40 loginapp.php");
        ?>
    </div>
</body>
</html>