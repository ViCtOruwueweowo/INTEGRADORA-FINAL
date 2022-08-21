<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();


$productos = isset($_SESSION['carrito']['PRODUCTOS']) ? $_SESSION['carrito']['PRODUCTOS'] : null;


$lista_carrito = array();
if($productos != null){

 foreach($productos as $clave=>$cantidad){

$sql= $con->prepare("SELECT CVE_P, NOMBRE, PRECIO_UNITARIO, descuento,$cantidad as EXISTENCIA FROM productos where CVE_P=? AND CATEGORIA>='1'");
$sql->execute([$clave]);
$lista_carrito = $sql->fetch(PDO::FETCH_ASSOC);

}
}
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
            <a href="index.php" class="nav-link active">Productos</a>
        </li>
        <li class="nav-item">
            <a href="ofertas.php" class="nav-link ">Ofertas</a>
        </li>
        <li class="nav-item">
            <a href="equipo.php" class="nav-link ">Equipo De Uso</a>
        </li>
        <li class="nav-item">
            <a href="bebidas.php" class="nav-link ">Bebidas</a>
        </li>
        <li class="nav-item">
            <a href="suplementos.php" class="nav-link ">Suplementos</a>
        </li>
    </ul>
    <a href="clases/carrito.php" class="btn btn-primary">
        Carrito <span id="num_cart" class="badge bg-success"><?php echo $num_cart; ?></span> </a></div>
    </div>
  </div>
</header>

<main>
    <div class="container">
  <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>
      <tbody>
        <?php if($lista_carrito == null){
            echo '<tr><td colspan="5" class="text-center"><b>Lista Vacia</b></td></tr>';
        
        }else{

            $total =0;
            foreach($lista_carrito as $producto){
                $_id = $producto['CVE_P'];
                $nombre = $producto['NOMBRE'];
                $precio = $producto['PRECIO_UNITARIO'];
                $descuento = $producto['descuento'];
                $cantidad = $producto['cantidad'];
                $precio_descento = $producto-(($precio*$descuento)/100);
                $subtotal = $cantidad * $precio_descento;
                $total += $subtotal;
            
        
        
        ?>
        <tr>
            <td><?php echo $nombre;?></td>
            <td><?php echo MONEDA . number_format($precio_descento,2,'.',',')?></td>
            <td><input type="number" min="1" max="10" step="1"
            value="<?php echo $cantidad  ?>" size="5" id="cantidad_<?php echo $id ?>" onchange=""></td>
            <td>
                <div id="subtotal <?php echo $_id; ?>" name="suubtotal[]">
                <?php echo MONEDA . number_format($subtotal,2,'.',',')?></div>
            </td>
<td><a href="#" id="eliminar" class="btn btn-danger btn-sm" data-bs-id="
<?php $_id; ?>" data-bs-toogle="modal" data-bs-traget="eliminaModal">Eliminar</a></td>
        </tr>
        <?php
            }
        
        ?>
        <tr>
            <td colspan="3">
                
            </td>
            <td colspan="2">
                <p class="h3" id="total">
       <?php echo         MONEDA . number_format($total,2,'.',',') ?>
                </p>
            </td>
        </tr>
      </tbody>  
      <?php
        }
      ?>
    </table>
  </div>
  <div class="row">
    <div class="col-md-5 offset-md-7 d-grid gap-2">
      <button class="btn btn-success btn-lg">Realizar Pago</button>  
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