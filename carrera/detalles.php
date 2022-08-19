<?php
require '<config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['CVE_P']) ? $_GET['CVE_P'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
    echo 'Error al proesar la peticion';
    exit;
}else{
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token ==$token_tmp){

        $sql= $con->prepare("SELECT count(CVE_P) FROM productos where CVE_P=?");
        $sql->execute([$id]);
        if($sql-> fetchColumn()>0){
            $sql= $con->prepare("SELECT NOMBRE, DESCRIPCION, PRECIO_UNOTARIO FROM productos where CVE_P=?");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $PRECIO =$row['PRECIO_UNITARIO'];
            $NOMBRE =$row['NOMBRE'];
            $DESCRIPCION =$row['DESCRIPCION'];
        }
    

    }else{
        echo 'Error al proesar la peticion';
        exit;
    }
}



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
                    <a href="#" class="nav-link active">productos</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">contacto</a>
                </li>

            </ul>

            
            <a href="carrito.php" class="btn btn-primary">Carrito</a>
          </div>
        </div>
      </div>
    </header>
<main>
    <div class="containter">
        <div class="row">
            <div class="col-md-6 order-md-1">

            </div>
            <div class="col-md-6 order-md-2">
                <h2><?php echo $NOMBRE;?></h2>
                <h2>$<?php echo $PRECIO;?></h2>
                <P class="lead">
                    <?php echo $DESCRIPCION?>
                </P>

            </div>
         </div>
    
    </div>
</main>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>