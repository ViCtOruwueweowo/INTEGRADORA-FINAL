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
        use MyApp\Query\Select;
        $usuario = new Ejecuta();
        $us = new Select();
        error_reporting(E_ERROR | E_PARSE);
        extract($_POST);
         
        $cad= "SELECT ID_US FROM usuario WHERE usuario.CORREO='$user'";

        $reg = $us->seleccionar($cad);
        foreach($reg as $value)
        {
        }
        
        $cadena="INSERT INTO inscrip_gym (TEL_EMERGENCIA, T_PAGO, FECHA_INSCRIP, USER_FK) VALUES ('$telefono','Tarjeta','$fecha','$value->ID_US')";
        $usuario->ejecutar($cadena);
if($value->ID_US==0)
{
    echo "<div class='alert alert=danger'>Error, ese cliente no ha sido registrado";
    header("refresh:3 cliente/index_cliente.php");
}
else
{
            echo "<div class='alert alert=success'>CLIENTE INSCRITO";
        header("refresh:3 cliente/index_cliente.php");
}

        ?>
    </div>
</body>
</html>