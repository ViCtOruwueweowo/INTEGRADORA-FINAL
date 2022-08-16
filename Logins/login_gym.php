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
        <h2  style='color:white;'align='center'>usuario: ".$_SESSION["usuario"]."</h2>";
        echo "<h3 align='center'>
        <a href='CERRARsesion.php' align='right'>[Cerrar Sesion]</a>
        </h3>
        </div>";
    }
    else
    {
        header("Location:login_app.php");
    }
    ?>
<form action="guardinscripcion.php" method="post">
    
    <h1 class="animate__animated animate__backInLeft">Inscripcion</h1>
    
    <p style="color:white">Ingresa tu Correo:<input type="text"placeholder="Ingrese su Correo" name=""></p>
    <br>
    <p style="color:white">Telefono de Emergencia:<input type="text"placeholder="Ingrese su telefono de emergencia" name="tel"></p>
    <label style="color: white;"for="ciudad">Tipo de Pago:</label>
<select style="color: black;" name="pago">
<option style="color: black;" value="Tarjeta">Tarjeta</option>
<option style="color: black;" value="Efectivo">Efectivo</option>
</select>
<br><br>
    <p style="color:white">Fecha de Inscripcion <input type="date" name="fecha_ins"></p>
    
    <input type="submit" value="Ingresar">
    <br>
    <br>
    <a href="../../index.php" style="color:white"><b>Regresar</b></a>
</form>
</body>
</html>