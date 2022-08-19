<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>Edicion</title>
    </head>
    <body>
        <div class="container">
            <?php
                use MyApp\Query\Select; 
                require("../../vendor/autoload.php");

                $insert = new Select();
                extract($_POST);

                $cadena = "UPDATE USUARIO SET NOMBRES='$nombre',APELLIDOS='$apellido',DIRECCION='$direccion',TELEFONO='$telefono',CORREO='$correo' where ID_US=1";
                $insert->seleccionar($cadena);
                
                echo"<div class='alert alert-succes'>
                EMPLEADO MODIFICADA</div>";
                header("refresh:4 ../administrador/index_admin.php")
            ?>
        </div>
    </body>
</html>