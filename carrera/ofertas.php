<?php
require '<config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql= $con->prepare("SELECT CVE_P, NOMBRE, PRECIO_UNITARIO, DESCRIPCION FROM productos where DESCUENTO >0");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The box Club</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

<header>
      
      <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container ">
          <a href="#" class="navbar-brand d-flex align-items-center ">
            
            <strong>The Box Club</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="..\carrera\index.php" class="nav-link">Bebidas</a>
                </li>

                <li class="nav-item">
                    <a href="cate2index.php" class="nav-link">suplementos</a>
                </li>
                <li class="nav-item">
                    <a href="categ3index.php" class="nav-link">Equipos deportivos</a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="ofertas.php" class="nav-link active">ofertas </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="productos.php" class="nav-link">Productos </a>
                </li>

            </ul>

            
            
          </div>
        </div>
      </div>
    </header>
<main>
    <div class="containter">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
        <?php foreach($resultado as $row ) {?>

        
            <div class="col-md-4">
              <div class="card shadow-sm">
                <img src="">
                <div class="card-body">
                <div class="d-flex flex-column justify-content-between align-items-center">
                  <h5 class="card-title"><?php echo $row['NOMBRE']?></h5><BR></BR>
                  <p class="card-taitle">$ <?php echo number_format($row['PRECIO_UNITARIO'], 2, '.', ',');?></p><br>
                  <p class="card-taitle"> <?php echo $row['DESCRIPCION'];?></p><br>
                    <div class="btn-group">

                      
                     
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
    </div>
</main>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>