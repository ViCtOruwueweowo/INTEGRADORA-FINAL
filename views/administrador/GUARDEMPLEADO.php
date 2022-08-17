<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Empleado registrado</title>
</head>
<body>
    <div class="container">
        <?php
        use MyApp\Query\Ejecuta; 
        require("../../vendor/autoload.php");

        $usuario = new Ejecuta();
        extract($_POST);
        $HASH = password_hash($password, PASSWORD_DEFAULT);
        $nivel2=(2);
        $cadena="INSERT INTO USUARIO (NOMBRES, APELLIDOS, DIRECCION, TELEFONO, CORREO, F_NAC, CP, CONTRASEÑA, NIVEL_USUARIO) VALUES('$nombre','$apellido','$direccion','$telefono','$user','$fnac','$cp','$HASH','$nivel2')";

        $usuario->ejecutar($cadena);

        echo "<div class='alert alert=success'>EMPLEADO REGISTRADO</div>";
        header("refresh:4 ../administrador/index_admin.php");
        ?>
    </div>
</body>
</html>