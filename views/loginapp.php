<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/bootstrap.js"></script>
    <title>Login App</title>
    <body>
<!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(87deg,#7c0078, rgb(235, 227, 227)) ;">
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
<form action="validar.php" method="post" style="padding: 30px 10px;
	background-color: #381b1ba6;
	margin: calc(20% + 20px);
	margin-top: 10px;
	padding-top: 18px;
	margin-bottom: 10px">

<h1 class="animate__animated animate__backInLeft">Iniciar Sesion</h1>

<p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>

<p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>

<input type="submit" value="Ingresar">
<br>
<br>
<a href="" style="color:white"><b>No tengo cuenta</b></a>
</form>  
</body>
</html>