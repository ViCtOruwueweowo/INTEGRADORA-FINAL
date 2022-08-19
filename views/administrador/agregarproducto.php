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
        <h3>Registro de Productos</h3>
        <hr>
        <form action="guardarproducto.php" method="post">
            <fieldset>
        
                <br>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="producto"  required placeholder=" "> <br><br>

                <label for="Fecha">PRECIO:</label>
                <input type="text" name="precio"  required placeholder=" "> <br><br>
                
                <label for="Fecha">DESCUENTO:</label>
                <input type="text" name="descuento"  required placeholder=" "> <br><br>
                
                <label for="Nombre">EXISTENCIAS:</label>
                <input type="text" name="existencia" required placeholder=" "> <br><br>
                
                <label for="Fecha">CATEGORIA:</label>
                <select name="categoria">
                    <option value="1">Bebidas</option>
                    <option value="2">Suplementos</option>
                    <option value="3">Equipo de uso</option>
                </select><br><br>

                <label for="proveedor">PROVEEDOR:</label>
                <select name="proveedor">
                    <option value="1">Pepsi</option>
                    <option value="2">Under Armour</option>
                    <option value="3">Chochos Adolfo</option>
                    <option value="4">Nuka Cola</option>
                    <option value="5">Suplemax</option>
                    <option value="6">Wunderwaffle</option>
                    <option value="8">Mr. increible</option>
                </select><br><br>

                <label for="Fecha">DESCRIPCION:</label>
                <input type="text" name="descripcion"  required placeholder=" "> <br><br>

                <input class="boton" type="submit" value="Guardar" name="Guardar">
        </form>
</div>
</body>
</html>