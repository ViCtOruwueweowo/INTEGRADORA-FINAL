<?php
        use MyApp\Query\Ejecuta;
        require("vendor/autoload.php");

        $insertar = new Ejecuta();

        if(isset($_GET['nombre']))
        {
            $nombre = $_GET['nombre'];
            $precio = $_GET['precio_unitario'];
            $descuento = $_GET['descuento'];
            $existencia = $_GET['existencia'];
            $descripcion = $_GET['descripcion'];
            $categoria = $_GET['categoria'];
            $proveedor = $_GET['proveedor'];

            $query = ("INSERT INTO PRODUCTOS(NOMBRE,PRECIO_UNITARIO,DESCUENTO,EXISTENCIA,CATEGORIA,PROV,DESCRIPCION) VALUES ('$nombre','$precio','$descuento','$existencia','$categoria','$proveedor','$descripcion')");  
            $insertar -> ejecutar($query);
        }
?>
<html>
    <form action="">
    <fieldset>
                <legend>Registro de productos</legend>
                <br>
                <label for="nombre">Nombre del producto</label>
                <input type="text" REQUIRED name="nombre"><br><br>
                <label for="precio">Precio</label>
                <input type="number" REQUIRED name="precio_unitario"><br><br>
                <label for="descuento">Descuento</label>
                <input type="text" REQUIRED name="descuento"><br><br>
                <label for="existencias">Existencias</label>
                <input type="text" REQUIRED name="existencia"><br><br>
                <label for="descripcion">Descripcion</label>
                <input type="text" REQUIRED name="descripcion"><br><br>
                <label for="categoria">Categoria</label>
                <select name="categoria">
<<<<<<< HEAD
                    <option value="1">Bebidas</option>
                    <option value="2">Energizante</option>
                    <option value="3">Equipo De Uso</option>
=======
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
>>>>>>> a08574a762221966c2a9fb0b98cfe4bedb7b274b
                </select>
                <label for="proveedor">Proveedor</label>
                <select name="proveedor">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select><br><br>
                <label for="foto">Foto del producto</label>
                <input type="file" REQUIRED name="imagen"><br><br>
                <br><br>
                <button type="submit">Cargar</button>
            </fieldset>



    </form>
</html>