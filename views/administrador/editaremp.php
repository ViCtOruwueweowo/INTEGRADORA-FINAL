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
$consulta = "SELECT * FROM USUARIO where ID_US = $editar";


$cc = $categoria->seleccionar($consulta);
foreach($cc as $edit){}
?>
        <h3>Modificar Empleado</h3>
        <hr>
        <form action="modificar_emp.php" method="post">
            <fieldset>
            
                <br>
                <input type="text" hidden name="cve" value='<?php echo $edit->ID_US?>'>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder="" value='<?php echo $edit->NOMBRES?>'> <br><br>

                <label for="Fecha">APELLIDOS:</label>
                <input type="text" name="apellido"  required placeholder="" value='<?php echo $edit->APELLIDOS?>'> <br><br>

                <label for="Fecha">DIRECCION:</label>
                <input type="text" name="direccion"  required placeholder="" value='<?php echo $edit->DIRECCION?>'> <br><br>

                <label for="Fecha">TELEFONO:</label>
                <input type="text" name="telefono"  required placeholder="" value='<?php echo $edit->TELEFONO?>'> <br><br>
                
                <label for="Fecha">CORREO:</label>
                <input type="text" name="correo"  required placeholder="" value='<?php echo $edit->CORREO?>'> <br><br>
                
                <input class="boton" type="submit" value="Guardar" name="Guardar">
                
        </form>
</div>
</body>
</html>