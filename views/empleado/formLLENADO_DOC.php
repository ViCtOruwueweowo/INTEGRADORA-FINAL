<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\empleado\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Orden de compra empleado</title>
</head>
<body>
<div class="container">
    <form action="guardarDOC.php" method="post">
        <h2 class="titulo">HACER COMPRA</h2>
  
        <div class="padre">
            <div class="1">
            <?php
   use MyApp\Query\select;
require("../../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_COMPRA, FECHA FROM ORDEN_COMPRA";

$reg = $query->seleccionar($cadena);

       echo "<div class='mb-3>'
       <label class='control-label'>
       Fecha de orden compra:
       </label>
       <select name='orden' class='form-select'>";
       foreach($reg as $value)
       {
           echo "<option value='".$value->ID_COMPRA."'>".$value->FECHA."</option>";
       }
       echo "</select>
       </div>";
               ?>
            </div> <br>
                        
            <?php
        require("../../vendor/autoload.php");

        $query = new Select();
        $cadena = "SELECT * FROM (SELECT CVE_P, NOMBRE AS NOM_PROD, PROV FROM PRODUCTOS) AS PROD INNER JOIN PROVEEDOR ON PROD.PROV=PROVEEDOR.ID_PRO"; 
        $reg = $query->seleccionar($cadena);

        echo "<div class='mb-3>'
        <label class='control-label'>
        PRODUCTOS
        </label>
        <select name='productos' class='form-select'>";
        foreach($reg as $value)
        {
            echo "<option value='".$value->CVE_P."'>".$value->NOM_PROD."</option>";
        }
        echo "</select>
        </div>";
        ?>
            
            <br>
            <div class="3">
                <label for="">CANTIDAD:</label>
                <input type="text" name="CANTIDAD">
            </div> <br>
            <div class="4">
                <label for="">PRECIO PROVEEDOR:</label>
                <input type="text" name="PROV">
            </div> <br>

            </div>

            <br>
            <br>
            <div class="d-grip gap-2">
             <input class="boton" type="submit" name="Guardar" value="Guardar">
            </div>
        </div>
    </form>
</div>
<script src="js\bootstrap.js"></script>
</body>
</html>