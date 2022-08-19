<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>Modificar</title>
    </head>
    <body>
        <div class="container">
            <?php
                use MyApp\Query\Select; 
                require("../../vendor/autoload.php");

                $insert = new Select();
                extract($_POST);
<<<<<<< HEAD

                $cadena = "UPDATE PRODUCTOS SET NOMBRE='$nombre',PRECIO_UNITARIO='$precio',DESCUENTO='$descuento',EXISTENCIA='$existencia',DESCRIPCION='$descripcion' where CVE_P=1";
                $cadena = "UPDATE PRODUCTOS SET NOMBRE='$nombre',PRECIO_UNITARIO='$precio',DESCUENTO='$descuento',EXISTENCIA='$existencia',PROV='$proveedor',DESCRIPCION='$descripcion' where CVE_P=$cve";
=======
                $cadena = "UPDATE PRODUCTOS SET NOMBRE='$nombre',PRECIO_UNITARIO='$precio',DESCUENTO='$descuento',EXISTENCIA='$existencia',DESCRIPCION='$descripcion' where CVE_P=1";

                $cadena = "UPDATE PRODUCTOS SET NOMBRE='$nombre',PRECIO_UNITARIO='$precio',DESCUENTO='$descuento',EXISTENCIA='$existencia',PROV='$proveedor',DESCRIPCION='$descripcion' where CVE_P=$cve";

>>>>>>> 0b0e0c4984af011f3894c292fe08f0674301fa03
                $insert->seleccionar($cadena);
                
                echo"<div class='alert alert-succes'>
                PRODUCTO MODIFICADA</div>";
                header("refresh:4 ../administrador/index_admin.php")
            ?>
        </div>
    </body>
</html>