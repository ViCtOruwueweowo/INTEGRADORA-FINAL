<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Orden de compra empleado</title>
</head>
<body>
<div class="container">
    <form action="guardarOC.php" method="post">
        <h2 class="titulo">HACER COMPRA COMO EMPLEADO</h2>
  
        <div class="padre">
            <div class="1">
                <label for="">AQUI VA LA FECHA</label>
                <input type="date" name="fecha">
            </div>
            <div class="2">
                <label for="">AQUI ID DEL EMPLEADO</label>
                <input type="text" name="ide">
            </div>

            <div class="3">
            <?php
        use MyApp\Query\Select;
        require("../../vendor/autoload.php");

        $query = new Select();
        $cadena = "SELECT ID_PRO, NOMBRE FROM PROVEEDOR";
        $reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        PROVEEDOR
        </label>
        <select name='proveedor' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->ID_PRO."'>".$value->NOMBRE."</option>";
        }
        echo "</select>
        </div>";
        ?>
            </div>
            <label for="">DESPUES DE ESTO, SEGUIRÁ CON DOC, AHÍ VA A PONER LA OTRA INFO QUE SE LE PIDE Y AL ACABAR SOLO LE CONFIRMA, AHI PIENSA COMO Y BORRAS ESTO CUANDO ACABES, SUERTE</label>
            <br>
            <br>
            <div class="d-grip gap-2">
             <input class="boton" type="submit" name="Guardar" value="Seguir pedido">
            </div>
        </div>
    </form>
</div>
<script src="js\bootstrap.js"></script>
</body>
</html>