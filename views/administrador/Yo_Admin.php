<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../js/bootstrap.js">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yo</title>
</head>
<body>
     <!--Menu-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index_admin.php" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex">

            <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {

 echo  
            "<a class='nav-link active d-flex' href='../CERRARsesion.php'>Cerrar sesión</a>";
  echo          "<a class='nav-link active d-flex' href='Yo_Admin.php'>Yo</a>";

  }
  ?>

</div>
</div>/
</form>
</div>
</div>
</nav>
<br>
<!--Mi perfil-->

<div style="background-image: linear-gradient(87deg,hsla(158, 80%, 40%, 0.356), rgba(0, 202, 229, 0.242)) ;">
<div class="container" style="background-color:transparent">
<h1 class="text-center">Configuracion</h1>
</div>
</div>

<?php
use MyApp\Query\Select;
require("../../vendor/autoload.php");

$edit=$_GET['id'];

$categoria = new Select();
$consulta = "SELECT * FROM usuario where ID_US = $edit";


$cc = $categoria->seleccionar($consulta);
foreach($cc as $edit){}
?>
        <h3>MIS DATOS</h3>
        <hr>
        <form action="modificar_admin.php" method="post">
            <fieldset>
            
                <br>
                <input type="text" hidden name="cve" value='<?php echo $edit->ID_US?>'>
                <label for="Fecha">NOMBRE:</label>
                <input type="text" name="nombre"  required placeholder="" value='<?php echo $edit->NOMBRES?>'> <br><br>

                <label for="Fecha">APELLIDOS:</label>
                <input type="text" name="apellido"  required placeholder="" value='<?php echo $edit->APELLIDOS?>'> <br><br>

                <label for="Fecha">DIRECCION:</label>
                <input type="text" name="direccion"  required placeholder="" value='<?php echo $edit->DIRECCION?>'> <br><br>

                <label for="Fecha">TELEFONO:</label>
                <input type="text" name="telefono"  required placeholder="" value='<?php echo $edit->TELEFONO?>'> <br><br>
                
                <label for="Fecha">CORREO:</label>
                <input type="text" name="correo"  required placeholder="" value='<?php echo $edit->CORREO?>'> <br><br>
                
                <input class="boton" type="submit" value="Guardar" name="Guardar">
                
        </form>
</div>
<!--mi perfil-->
</body>
</html>