<html>
<meta charset="UTF-8">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/fondo.css">
<link rel="stylesheet" href="../js/bootstrap.js">
<title>Ofertas</title>
<style>
        body{
            background-color: teal;
        }
    </style>
</head>
<body>
	<!--Menu-->
	
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            <form class="d-flex">
            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Suplementos</a>
            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Equipo</a>
            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Bebidas</a>
            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Todos</a>
            <a class="nav-link active d-flex" aria-current="page" href="agregarcategoria.php">Ofertas</a>
    </div>
  </div>
</nav>
      <!---->

<br>
<h1 style="text-align:center;color:white;">Ofertas Del Mes De Agosto</h1>
<?php
use MyApp\Query\select;
require("../vendor/autoload.php");

$query = new select();

$cadena= "SELECT ID_CAT, NOMBRE, DETALLE FROM CATEGORIA";

if ($cadena)
{ 
	
?>
	<div class="contenedor_productos">
		<form method="POST" action="index.php?accion=agregar&cod=
		<?php echo $cadena[$i]["cod"]; ?>">
		<div><img src="<?php echo $query[$i]["img"]; ?>"></div>
		<div>
		<div style="padding-top:20px;font-size:18px;"><?php echo $cadena[$i]["NOMBRE"]; ?></div>
		<div style="padding-top:10px;font-size:20px;"><?php echo "$".$cadena[$i]["PRECIO_UNITARIO"]; ?></div>
		<div><input type="text" name="txtcantidad" value="1" size="2" /><input type="submit" value="Agregar" />
		</div>
		</div>
		</form>
	</div>
<?php
	
}
?>
</body>
</html>