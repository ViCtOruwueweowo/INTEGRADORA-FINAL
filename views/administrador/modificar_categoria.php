<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>Registro</title>
    </head>
    <body>
        <div class="container">
            <?php
                use MyApp\Query\Ejecuta; 
                require("../../vendor/autoload.php");

                $insert = new Select();
                extract($_POST);

                $cadena = "UPDATE CATEGORIA SET NOMBRE='$nombre',DETALLE='$detalle' where id_cat=1";
                $insert->seleccionar($cadena);   
                
                echo"<div class='alert alert-succes'>
                CLIENTE REGISTRADO</div>";
                header("refresh:4 ../administrador/index_admin.php")
            ?>
        </div>
    </body>
</html>