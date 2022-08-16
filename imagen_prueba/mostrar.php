<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <table border="2">
        <thead>
            <tr>
                <th colspan ="5"><a href="registrar.php">NUEVO</a></th>
            </tr>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Descripcion</th>
                <th colspan="2">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

        use MyApp\Query\Ejecuta;
        require("vendor/autoload.php");
        $query = new Ejecuta();
        $qry = "SELECT * FROM PRODUCTOS";
        $query -> ejecutar($qry);
        
        while ($row = $query){
    ?>
        <tr>
            <td><div><img src="<?php echo $row["image"];?>"></div></td>
            <td><?php echo $row['NOMBRE']; ?></td>
            <td><?php echo $row['PRECIO_UNITARIO']; ?></td>
            <td><?php echo $row['DESCUENTO']; ?></td>
            <td><?php echo $row['DESCRIPCION']; ?></td>
            <th><a href="modificar.php? NOMBRE=<?php echo $row['NOMBRE'];?>">Modificar</a></th>
        </tr>
    <?php            
        }
    ?>
            
        </tbody>
    </table>
    </center>
</body>
</html>