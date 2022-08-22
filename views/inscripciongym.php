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
<form action="GUARDINSCRIP.php" method="post" style="padding: 30px 10px;
	background-color: #381b1ba6;
	margin: calc(20% + 20px);
	margin-top: 10px; 
	padding-top: 18px;
	margin-bottom: 10px">

<h1 class="animate__animated animate__backInLeft">¡¡Inscríbete a nuestro gimnasio ahora!!</h1>
<h5 class="animate__animated animate__backInLeft">Comencemos este viaje juntos</h5>


<p>Correo electrónico </p>
  <input type="text" placeholder="Ingrese su correo" name="user">
  <br><br>

<p>Teléfono de emergencia<input type="text" placeholder="Ingrese su teléfono" name="telefono"></p><br>

<?php
        date_default_timezone_set('America/Mexico_City');
        $fecha_actual=date("Y-m-d");
        date_default_timezone_set('America/Mexico_City');
        //fecha actual del sistema
        $fe=date("Y-m-d");

        $mod_date = strtotime($fe."+ 0 days");
        $fecha_maxima = date("Y-m-d",$mod_date);

        ?>

<label>Fecha <br><input type="date" name="fecha" min="<?php echo $fe ?>" max="<?php echo $fecha_maxima?>" required></label><br>

<br><label>Método de pago</label><br><br>
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>

  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"MXN","value":1000}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
  

<input type="submit" value="Registrarme Ahora">
<br>
<br>

</form>  
</body>
</html>