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
        echo "<h5 align'right'>usuario:".$_SESSION["usuarios"]."</h5>";
        echo "<h6 align-'right'>
        <a href='scripts/cerrarSesion.php'>[CerrarSesion]</a>
        </h6>";
    }
    else
    {
        header("Location:login_app.php");
    }
    ?>

    <?php
    use MyApp\Query\Ejecuta;
    require("../../vendor/autoload.php");
    
    $usuario =new Ejecuta();
    extract($_POST);
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $nivel=(1);
    $cadena="INSERT INTO usuario(NOMBRES,APELLIDOS,DIRECCION,TELEFONO,CORREO,F_NAC,CP,CONTRASEÑA,NIVEL_USUARIO)
     VALUES('$nombres','$apellidos','$dire','$tele','$correo','$FC','$CP','$hash','$nivel')";

    $usuario->ejecuta($cadena);

    echo "<div class='alert alert-success'>USUARIO REGISTRADO</div>";
    header("refresh:10 login_app.php");
    ?>
    </div>
</body>
</html>