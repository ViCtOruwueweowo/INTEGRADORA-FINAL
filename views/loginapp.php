<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/iniciosesion.css">
    <title>Login App</title>
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
              <li class="nav-item">
              
              </li>
            </ul>
            <form class="d-flex">
            

            </form>
          </div> 
        </div>
</nav>
      <!---->
      <?php
  session_start();
  if(isset($_SESSION["CORREO"]))
  {
    echo "<div class='alert alert-warning'>
    <h2 align='center'>Ya existe una sesión activa, usuario: ".$_SESSION["CORREO"]."</h2>";
    echo "<h3 align='center'>
    <a href='CERRARsesion.php'>[Cerrar sesión]</a>
    </h3>
    </div>";
  }

  
  ?>
<form action="validar.php" method="post" cl>

<h1 class="animate_animated animate_backInLeft">Iniciar Sesion</h1>
 
<p>Correo <input type="text" placeholder="Ingrese su correo" name="user"></p>

<p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
<div class="form-group mx-sm-4 pb-3">
<input type="submit" value="Iniciar sesión">
</div>
<br><br>
<span>¿No tienes cuenta?<a class="olvide" href="formALTAUSUARIO.php">Registrate</a></span>
</body>
</html>