<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql= $con->prepare("SELECT CVE_P, NOMBRE, PRECIO_UNITARIO, DESCRIPCION FROM productos where CATEGORIA='3'");
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

  <div class="navbar navbar-expand-lg"  style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
    <div class="container">
      <a href="../index_cliente.php" class="navbar-brand ">
        <strong>The Box Club</strong>
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
            <a href="equipo.php" class="nav-link active ">Equipo De Uso</a>
        </li>
        <li class="nav-item">
            <a href="bebidas.php" class="nav-link ">Bebidas</a>
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
foreach($resultado as $row){
        ?>
        <div class="col">
          <div class="card shadow-sm">
            <?php
$id =$row[('CVE_P')];
$imagen = "imagenes/productos/".$id."/Saber.Alter.full.3043848.png";
if(!file_exists($imagen)){
    $imagen="imagenes/no image.png";
}
            ?>
<img src="<?php echo $imagen; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row ['NOMBRE']; ?></h5>
              <p class="card-text"><?php echo number_format($row ['PRECIO_UNITARIO'],2,'.',','); ?></p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             <a href="details.php?CVE_P=<?php echo $row ['CVE_P']; ?>&token=<?php echo 
             hash_hmac('sha1',$row['CVE_P'],KEY_TOKEN);?>" class="btn 
             btn-info">Detalles</a>
            
                </div>
                <a href="checkout_.php"><button class="btn btn-outline-success" type="button" 
>Comprar Ahora</button>  </a>
           </div>
              </div>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </div>
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
</main>
</body>
</html>