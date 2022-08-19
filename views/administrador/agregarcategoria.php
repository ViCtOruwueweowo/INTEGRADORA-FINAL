<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">

    <title>Document</title>
</head>
<body>
<div style="width: 50%; margin:auto;">
        <h3>Registro de Categoria</h3>
        <hr>
        <form action="guardarcategoria.php" method="post">
            <fieldset>
               
                <br>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder=" "> <br><br>

                <label for="Fecha">DETALLE:</label>
                <input type="text" name="detalle"  required placeholder=" "> <br><br>

                <input class="boton" type="submit" value="Guardar" name="Guardar">
        </form>
</div>
</body>
</html>