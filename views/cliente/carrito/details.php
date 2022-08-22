<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['CVE_P']) ? $_GET['CVE_P'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' ||$token == ''){
    echo 'Error al procesar la peticion';
    exit;
} else {

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    
    if($token == $token_tmp) {

        $sql= $con->prepare("SELECT count(CVE_P) FROM productos where CVE_P=?");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql= $con->prepare("SELECT NOMBRE,DESCRIPCION,PRECIO_UNITARIO,descuento FROM productos where CVE_P=?
            LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre =$row['NOMBRE'];
            $descripcion =$row['DESCRIPCION'];
            $descuento =$row['descuento'];
            $precio =$row['PRECIO_UNITARIO'];
           
            $precio_desc=$precio -(($precio * $descuento));
            $dir_images = 'imagenes/productos/' .$id. '/';

            $rutaImg = $dir_images .'Saber.Alter.full.3043848.jpg';

if(!file_exists($rutaImg)){
    $rutaImg='imagenes/no imagen.png';

}
$images = array();
if(file_exists($dir_images))
{
$dir= dir($dir_images);
while(($archivo = $dir->read()) != false ){
    if($archivo != 'Saber.Alter.full.3043848.jpg' && (strpos($archivo, 'jpg')||strpos($archivo, 'png'))){
        $images[]=$dir_images . $archivo;

    }
}
$dir->close();
}
}
    } else {
        echo 'Error al procesar la peticion';
        exit;
    }
}

$sql= $con->prepare("SELECT CVE_P, NOMBRE, PRECIO_UNITARIO, DESCRIPCION FROM productos where CATEGORIA='1'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <!--Links de boostrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

<header>

  <div class="navbar navbar-expand-lg " style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
    <div class="container">
      <a href="../index_cliente.php" class="navbar-brand ">
        <strong>Tienda Online</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<div class="collapse navbar-collapse" id="navbarHeader">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
            <a href="index.php" class="nav-link ">Productos</a>
        </li>
        <li class="nav-item">
            <a href="ofertas.php" class="nav-link ">Ofertas</a>
        </li>
        <li class="nav-item">
            <a href="equipo.php" class="nav-link ">Equipo De Uso</a>
        </li>
        <li class="nav-item">
            <a href="bebidas.php" class="nav-link">Bebidas</a>
        </li>
        <li class="nav-item">
            <a href="suplementos.php" class="nav-link ">Suplementos</a>
        </li>
    </ul>
</div>
    </div>
  </div>
</header>

<main>
    <div class="container">
    <div class="row">
        <div class="col-md-6 order-md-1">
<img src="imagenes/productos/1/Saber.Alter.full.3043848.png" alt=""> 
        </div>
        <div class="col-md-6 order-md-2">
          <h2><?php echo $nombre; ?></h2>  
          <?php if($descuento >0){?>
<p><del><?php echo MONEDA . number_format($precio,2,'.',','); ?></del></p>
<h2>
     <?php echo MONEDA . number_format($precio_desc,2,'.',','); ?><br>
<small class="text-success"><?php echo $descuento; ?> % Descuento</small>
</h2>
<?php } else{?>


          <h2> <?php echo MONEDA . number_format($precio,2,'.',','); ?></h2>
      
      <?php }?>
       
          <p class="lead">
<?php echo $descripcion; ?>
      </p>
      <div class="d-grid gap-3 col-10 mx-auto">
<a href="checkout_.php"  class="btn btn-success"><button class="btn btn-success" type="button">Comprar Ahora</button></a>
      </div>
        </div>
    </div>
    </div>
</main>
<script>
   function addProducto(id, token){
let url = 'clases/carrito.php'
let formData = new formData();
formData.append('CVE_P',id)
formData.append('token',token)
fetch(url,{
method:'POST',
body:'formData',
mode:'cors'

}).then(response => response.json())
.then(data=>{
if(data.ok){
  let elemento = document.getElementById("num_cart")
  elemento.innerHTML = data.numero
}
})  
 }
</script>
</body>
</html>