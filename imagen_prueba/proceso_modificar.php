<?php
    
    use MyApp\Query\select;
    require("vendor/autoload.php");

    $NOMBRE = $_REQUEST['nombre'];

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descu = $_POST['descuento'];
    $exis = $_POST['existencia'];
    $cat = $_POST['categoria'];
    $descrip = $_POST['descripcion'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE PRODUCTOS SET  NOMBRE='$nombre', PRECIO_UNITARIO='$precio', DESCUENTO='$descu', EXISTENCIA='$exis',
    CATEGORIA ='$cat',DESCRIPCION ='$descrip', IMAGEN ='$imagen' WHERE NOMBRE = '$nombre'";
    $resultado = $conexion-> query($query);

    if ($resultado)
    {
        echo "Modificacion exitosa";
        header("Location: ..\imagen_prueba\mostrar.php");
    }
    else
    {
        echo "Modificacion fallida";
    }
?>
