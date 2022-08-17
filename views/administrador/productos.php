<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
        <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,#7c0078, rgb(235, 227, 227)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.php" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              
              </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                <a class="nav-link active" aria-current="page" href="modificar.php">Modificar</a>
                <a class="nav-link active" aria-current="page" href="registrar.php">Registrar</a>
            </form>
          </div>
        </div>
    </nav>
      <!---->
      <?php
        use MyApp\Query\Ejecuta;
        require("../../vendor/autoload.php");

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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="proveedor">Proveedor</label>
                <select name="proveedor">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select><br><br>
                <label for="foto">Foto del producto</label>
                <input type="file" REQUIRED name="imagen"><br><br>
                <br><br>
                <button type="submit">Cargar</button>
            </fieldset>
    </form>
</html>
</body>
</html>