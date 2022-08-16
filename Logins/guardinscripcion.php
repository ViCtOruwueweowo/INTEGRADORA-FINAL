<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>usuario</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION["usuario"]))
    {
        echo "<h5 align'right'>usuario:".$_SESSION["usuario"]."</h5>";
        echo "<h6 align-'right'>
        <a href='scripts/cerrarSesion.php'>[CerrarSesion]</a>
        </h6>";
    }
    else
    {
        header("Location:login_gym.php");
    }
    ?>

    <?php
    use MyApp\Query\Ejecuta;
    require("../../vendor/autoload.php");
    $usuario =new Ejecuta();
    extract($_POST);
    $UK="SELECT *FROM usuario Where ID_US=$_SESSION";
    $usuario->ejecuta($UK);
    foreach($usuario as $id)
    {
        $fk=$id->ID_US;
    }
    $cadena="INSERT INTO inscrip_gym(TEL_EMERGENCIA,T_PAGO,FECHA_INSCRIP)
    VALUES('$tel','$pago','$fecha_ins',$fk)";
    $usuario->ejecuta($cadena);
    echo "<div class='alert alert-success'>Inscripcion Exitosa!!</div>";
    header("refresh:10 login_gym.php");

    ?>
    </div>
</body>
</html>