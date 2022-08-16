<?php
    
    use MyApp\Query\Ejecuta;
    require("vendor/autoload.php");

    $insert = new Ejecuta();

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio_unitario'];
    $descu = $_POST['descuento'];
    $exis = $_POST['existencia'];
    $cat = $_POST['categoria'];
    $prov = $_POST['proveedor'];
    $descrip = $_POST['descripcion'];


    $query = "INSERT INTO PRODUCTOS(NOMBRE,PRECIO_UNITARIO,DESCUENTO,EXISTENCIA,CATEGORIA,PROV,DESCRIPCION,IMAGEN) 
    VALUES ('$nombre','$precio','$descu','$exis','$cat','$prov','$descrip')";
    $insert-> ejecutar($query);

    if ($insert)
    {
        header("Location: ..\imagen_prueba\mostrar.php");
    }
    else
    {
        echo "No se inserto";
    }
?>
