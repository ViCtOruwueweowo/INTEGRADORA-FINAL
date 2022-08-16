<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login App</title>
</head>
<body style="background-image:url(https://www.xtrafondos.com/descargar.php?id=4052&resolucion=3840x2160)">
<?php
    session_start();
    if (isset($_SESSION["usuario"]))
    {
        echo "<div class='alert 'alert-warning'>
        <h2 align='center'> Ya existe una sesion activa, usuario: ".$_SESSION["usuario"]."</h2>";
        echo "<h3 align-'center'>
        <a href='cerrarSesion.php'>[Cerrar Sesion]</a>
        </h3>
        </div>";
    }
    else
    {
        ?>
<form action="validar.php" method="post">
    
    <h1 class="animate__animated animate__backInLeft">Iniciar Sesion</h1>
    
    <p style="color:white">Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>
    
    <p style="color:white">Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
    
    <input type="submit" value="Ingresar">
    <br>
    <br>
    <a href="formALTAUSUARIO.php" style="color:white"><b>No tengo cuenta</b></a>
</form>
<?php
    }
        ?>
</body>
</html>