<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
   <form action="GUARDINSCRIP.php" method="post">
        <?php
        use MyApp\Query\select;
        require("../vendor/autoload.php");
        extract($_POST);
        $query = new select();
        $cadena= "SELECT ID_US, NOMBRES FROM USUARIO WHERE USUARIO.CORREO='$user'";

        $reg = $query->seleccionar($cadena);
        echo "<h1>Confirma tu información antes de continuar</h1><br><br> <div class='mb-3>'
        <label class='control-label'>
        NOMBRE:
        </label>
        <label name='nombre' class=''>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_US."'>".$value->NOMBRES."</option>";
        }
        echo "</select>
        </div>";
        echo "<br><h5>Tu teléfono de emergencia es: <br>$telefono</h5>";
        echo "<br>";
        echo "<h5>Y hoy es el día: <br>$fecha</h5>";

        ?>
     
        <input type="submit" value="Continuar">
    </form> 
</body>
</html> 