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
use MyApp\Query\select;
require("../../vendor/autoload.php");

$editar=$_GET['id'];

$categoria = new Select();
$consulta = "SELECT * FROM CATEGORIAS where ID_CAT = $editar";


$cc = $categoria->seleccionar($consulta);
foreach($cc as $edit){}
?>
        <h3>Modificar categoria</h3>
        <hr>
        <form action="modificar_categoria.php" method="post">
            <fieldset>
            
                <br>
                <input type="text" hidden name="cve" value='<?php echo $edit->ID_CAT?>'>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder="" value='<?php echo $edit->NOMBRE  ?>'> <br><br>

                <label for="Fecha">DETALLE:</label>
                <input type="text" name="detalle"  required placeholder="" value='<?php echo $edit->DETALLE ?>'> <br><br>

                
                <input class="boton" type="submit" value="Guardar" name="Guardar">
                
        </form>
</div>
</body>
</html>