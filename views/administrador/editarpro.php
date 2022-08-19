<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar</title>

    <link rel="stylesheet" href="css/registro.css">

    <title>Document</title>

</head>
<body>
<div style="width: 50%; margin:auto;">
<?php
use MyApp\Query\Select;
require("../../vendor/autoload.php");

$editar=$_GET['id'];

$categoria = new Select();
$consulta = "SELECT PRODUCTOS.CVE_P,PRODUCTOS.NOMBRE,PRODUCTOS.PRECIO_UNITARIO,PRODUCTOS.DESCUENTO,PRODUCTOS.EXISTENCIA,CATEGORIAS.NOMBRE AS NOM_C,PROVEEDOR.NOMBRE AS NOM_P,PRODUCTOS.DESCRIPCION FROM PRODUCTOS INNER JOIN PROVEEDOR ON PROVEEDOR.ID_PRO=PRODUCTOS.PROV INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CAT=PRODUCTOS.CATEGORIA where CVE_P = $editar";


$cc = $categoria->seleccionar($consulta);
foreach($cc as $edit){}
?>
        <h3>Productos</h3>
        <hr>
        <form action="modificar_pro.php" method="post">
            <fieldset>
            
                <br>
                <input type="text" hidden>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder="" value='<?php echo $edit->NOMBRE  ?>'> <br><br>

                <label for="Fecha">PRECIO:</label>
                <input type="text" name="precio"  required placeholder="" value='<?php echo $edit->PRECIO_UNITARIO?>'> <br><br>

                <label for="Fecha">DESCUENTO:</label>
                <input type="text" name="descuento"  required placeholder="" value='<?php echo $edit->DESCUENTO?>'> <br><br>

                <label for="Fecha">EXISTENCIA:</label>
                <input type="text" name="existencia"  required placeholder="" value='<?php echo $edit->EXISTENCIA?>'> <br><br>
                
                <label for="Fecha">CATEGORIA:</label>
                <input type="text" name="categoria"  required placeholder="" value='<?php echo $edit->NOM_C?>'> <br><br>

                <label for="Fecha">PROVEEDOR:</label>
                <input type="text" name="proveedor"  required placeholder="" value='<?php echo $edit->NOM_P?>'> <br><br>
                
                <label for="Fecha">DESCRIPCION:</label>
                <input type="text" name="descripcion"  required placeholder="" value='<?php echo $edit->DESCRIPCION?>'> <br><br>
                
                <input class="boton" type="submit" value="Guardar" name="Guardar">
                
        </form>
</div>
</body>
</html>