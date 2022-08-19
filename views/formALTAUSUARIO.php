<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Alta usuario</title>
</head> 
<body>
<div style="width: 50%; margin:auto;">
        <h3>Registro</h3>
        <hr>
        <form action="GUARDUSUARIO.php" method="post">
            <fieldset>
                <legend>Alta Usuario</legend> 
                <br>
                <label for="Fecha">NOMBRES:</label>
                <input type="text" name="nombre"  required placeholder=" "> <br><br>

                <label for="Fecha">APELLIDOS:</label>
                <input type="text" name="apellido"  required placeholder=" "> <br><br>
                
                <label for="Fecha">DIRECCIÓN:</label>
                <input type="text" name="direccion"  required placeholder=" "> <br><br>
                
                <label for="Nombre">TELÉFONO:</label>
                <input type="text" name="telefono"  required placeholder=" "> <br><br>
                
                <label for="Fecha">CORREO:</label>
                <input type="text" name="user"  required placeholder=" "> <br><br>
                
                <label for="Fecha">FECHA DE NACIMIENTO:</label>
                <input type="date" name="fnac" max="2022-08-19" required placeholder=" "> <br><br>
                
                <label for="Fecha">CÓDIGO POSTAL:</label>
                <input type="text" name="cp"  required placeholder=" "> <br><br>
                
                <label for="Fecha">CONTRASEÑA:</label>
                <input type="password" name="password"  required placeholder=" "> <br><br>

                <input class="boton" type="submit" value="Guardar" name="Guardar">
        </form>
</body>
</html> 