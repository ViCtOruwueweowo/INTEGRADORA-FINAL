<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 50%; margin:auto;">
        <h3>Registro de Proveedores</h3>
        <hr>
        <form action="guardarproveedor.php" method="post">
            <fieldset>
                <legend>Alta Proveedor</legend> 
                <br>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder=" "> <br><br>

                <label for="Fecha">DIRECCION:</label>
                <input type="text" name="direccion_prov"  required placeholder=" "> <br><br>
                
                <label for="Fecha">CORREO:</label>
                <input type="text" name="correo_prov"  required placeholder=" "> <br><br>
                
                <label for="Nombre">TELÉFONO:</label>
                <input type="text" name="tel_prov"  required placeholder=" "> <br><br>
                
                <label for="Fecha">CIUDAD:</label>
                <input type="text" name="ciudad_prov"  required placeholder=" "> <br><br>

                <input class="boton" type="submit" value="Guardar" name="Guardar">
        </form>
</div>
</body>
</html>