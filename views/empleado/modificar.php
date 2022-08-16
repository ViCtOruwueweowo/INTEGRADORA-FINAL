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
            <a class="nav-link active" aria-current="page" href="proveedor.php">Proveedor</a>
                <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                <a class="nav-link active" aria-current="page" href="modificar.php">Modificar</a>
                <a class="nav-link active" aria-current="page" href="pedido.php">Pedido</a>
            </form>
          </div>
        </div>
    </nav>
      <!---->
      <center> <br><br><br>
        <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombre</label>
      <input value="" name="nombre" type="text" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Precio</label>
      <input value="" name="precio" type="text" class="form-control" placeholder="">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Descuento</label>
      <input value="" name="descuento" type="text" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="profesion">Existencia</label>
      <input value="" name="existencia" type="text" class="form-control" placeholder="">
    </div>
  <div class="form-group col-md-6">
    <label for="categoria"></label>
    <select required name="categoria" class="form-control">
    <option value=""></option>        
    <option value=""><< >></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
  </div>
  <div class="form-group col-md-6">
      <label for="descripcion">Descripcion</label>
      <input value="" name="descripcion" type="text" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
    <label for="proveedor">Proveedor</label>
    <select required name="proveedor" class="form-control">
    <option value=""></option>        
    <option value=""><< >></option>
    <option value="uno">1</option>
    <option value="dos">2</option>
    <option value="tres">3</option>
    <option value="cuatro">4</option>
    <option value="cinco">5</option>
    <option value="seis">6</option>
    </select>
  </div>
<?php
  use MyApp\Query\Ejecuta;
  require("../../vendor/autoload.php");
        $insertar = new Ejecuta();

        if(isset($_POST['nombre']))
        {
            $nombre =trim($_POST)['nombre'];
            $precio = trim($_POST)['precio'];
            $descuento =trim($_POST)['descuento'];
            $existencia =trim($_POST)['existencia'];
            $descripcion =trim($_POST)['descripcion'];
            $categoria =trim($_POST)['categoria'];
            $proveedor =trim($_POST)['proveedor'];

            $consulta = "UPDATE PRODUCTOS SET NOMBRE='$nombre', PRECIO_UNITARIO='$precio', DESCUENTO='$descuento', EXISTENCIA='$existencia',CATEGORIA ='$categoria',DESCRIPCION ='$descripcion' WHERE NOMBRE = '$nombre'";

            $resultado = $conexion-> query($consulta);

            $sql->bindParam('nombre',$nombre,PDO::PARAM_STR, 25);
            $sql->bindParam('precio',$precio,PDO::PARAM_STR, 25);
            $sql->bindParam('descuento',$descuento,PDO::PARAM_STR,25);
            $sql->bindParam('existencia',$existencia,PDO::PARAM_STR,25);
            $sql->bindParam('categoria',$categoria,PDO::PARAM_STR);
            $sql->bindParam('descripcion',$descripcion,PDO::PARAM_INT);

            $sql->ejecutar();

            if($sql->rowCount() > 0)
            {
                $count = $sql -> rowCount();
                echo "<div class='content alert alert-primary' >
                Gracias: $count registro ha sido actualizado </div>";
            }
            else
            {
                echo "<div class='content alert alert-danger'> No se pudo actulizar el registro </div>";
                print_r($sql->errorInfo()); 
            }
        }
        ?>
  <h3 class="mt-5">Actualizar información PDO PHP y MySQL</h3>
  <hr>
  <div class="row">
<?php 
if (isset($_POST['editar'])){
    $nombre = $_POST['nombre'];
    $sql= "SELECT * FROM PRODUCTOS WHERE NOMBRE = nombre"; 
    $stmt = $connect->prepare($sql);
    $stmt->bindParam('nombre', $nombre, PDO::PARAM_INT); 
    $stmt->execute();
    $obj = $stmt->fetchObject();
}

?>
</body>
</html>