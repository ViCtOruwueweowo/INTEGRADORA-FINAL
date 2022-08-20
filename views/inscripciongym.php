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
          <a class="navbar-brand" href="../views/cliente/index_cliente.php" style="color: white;">The Box Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
            </form>
          </div>
        </div>
</nav>
      <!---->
      <?php
      date_default_timezone_set('America/Mexico_City');
      $fecha=date("y-m-d");
      ?>
<form action="GUARDINSCRIP.php" method="post" style="padding: 30px 10px;
	background-color: #381b1ba6;
	margin: calc(20% + 20px);
	margin-top: 10px; 
	padding-top: 18px;
	margin-bottom: 10px">

<h1 class="animate__animated animate__backInLeft">¡¡Inscríbete a nuestro gimnasio ahora!!</h1>
<h5 class="animate__animated animate__backInLeft">Comencemos este viaje juntos</h5>

<p>Correo electrónico <input type="text" placeholder="Ingrese su correo" name="user"></p>

<p>Teléfono<input type="text" placeholder="Ingrese su teléfono" name="telefono"></p>

<label>Dia De Registro<input type="datetime" name="fecha" value="" placeholder="<?= $fecha?>"></p>

<p>Metodo De Pago</p>
  <select name="metodo">
      <option value="1" name="Credito">Credito</option>
      <option value="2" name="Debito">Debito</option>
      <option value="3" name="Paypal">Paypal</option>
  </select>
  

<input type="submit" value="Registrarme Ahora">
<br>
<br>

</form>  
</body>
</html>