<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-image:url(https://www.xtrafondos.com/descargar.php?id=4052&resolucion=3840x2160)">
<div style="width: 50%; margin:auto;">
        <h3 style="color:white">Registro</h3>
        <hr>
        <form action="GUARDUSUARIO.php" method="post">
            <fieldset>
                <legend style="color:white">Alta Clientes</legend>
                <br>
                <label style="color:white" for="Nombre">Nombres:</label>
                <input type="text" name="nombres"  required placeholder="Escribe tu nombre"> <br><br>
                <label style="color:white"for="Nombre">Apellidos:</label>
                <input type="text" name="apellidos"  required placeholder="Escribe tus apellidos"> <br><br>
                <label style="color:white"for="Nombre">Direccion:</label>
                <input type="text" name="dire"  required placeholder="Escribe tu direccion"> <br><br>
                <label style="color:white"for="Nombre">Telefono:</label>
                <input type="text" name="tele"  required placeholder="Escribe tu direccion"> <br><br>
                <label style="color:white"for="Nombre">Correo:</label>
                <input type="email" name="correo"  required placeholder="Escribe tu correo"> <br><br>
                <label style="color:white"for="Nombre">Fecha de Nacimiento:</label>
                <input type="date" name="FC"  required placeholder="Escribe tu fecha de nacimiento"> <br><br>
                <label style="color:white"for="Fecha">Cp:</label>
                <input style="color:white"type="text" name="CP"  required placeholder="Escribe tu codigo postal"> <br><br>
                <label style="color:white"for="Fecha">tu password:</label>
                <input type="password" name="pass"  required placeholder="Escribe tu password"> <br><br>
                <input class="boton" type="submit" value="Guardar" name="Guardar">
            </form>
      </body>
    </html>