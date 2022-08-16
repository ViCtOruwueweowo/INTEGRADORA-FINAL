<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <?php
        use MyApp\Query\Login;
        require("../vendor/autoload.php");

        $usuario = new Login();
        extract($_POST);

        $usuario->verificaLogin("$user","$password");

        ?>
    </div>
</body>
</html>