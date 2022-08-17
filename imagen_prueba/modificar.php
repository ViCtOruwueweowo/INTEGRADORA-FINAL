<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR</title>
</head>
<body>
        <?php   

            use MyApp\Query\select;
            require("vendor/autoload.php");

            $nom = $_REQUEST['NOMBRE'];

            $query = "SELECT * FROM PRODUCTOS WHERE NOMBRE='$nom'";
            $resultado = $database -> query($query);
            $row = $resultado;
         ?>
         
<center> <br><br><br>
        <form action="..\imagen_prueba\proceso_modificar.php? <?php echo $row['NOMBRE'];?>" method="POST" enctype="multipart/form-data">
            <Label>Nombre Producto:</Label><br>
            <input type="text" REQUIRED name="nom" placeholder="Nombre..." value="<?php echo $row['NOMBRE'];?>"/><br><br>
            <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN']);?>"/><br>
            <input type="file" REQUIRED name="imagen"/><br><br>
            <label>Precio:</label><br>
            <input type="text" REQUIRED name="precio" value="<?php echo $row['PRECIO_UNITARIO'];?>"/><br><br>
            <label>Descuento:</label><br>
            <input type="text" REQUIRED name="descuento" value="<?php echo $row['DESCUENTO'];?>"/><br><br>
            <label>Existencia:</label><br>
            <input type="text" REQUIRED name="existencia" value="<?php echo $row['EXISTENCIA'];?>"/><br><br>
            <label>Categoria:</label><br>
            <input type="text" REQUIRED name="categoria" value="<?php echo $row['CATEGORIA'];?>"/><br><br>
            <label>Descripcion:</label><br>
            <input type="text" REQUIRED name="descripcion" value="<?php echo $row['DESCRIPCION'];?>"/><br><br>
            <input type="submit" value="Aceptar">
        </form>
    </center>
</body>
</html>