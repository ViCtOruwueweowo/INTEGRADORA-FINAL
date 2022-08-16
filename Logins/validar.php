<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        use MyApp\Query\login;
        require ("../../vendor/autoload.php");
        $user =new login();
        extract($_POST);

        $user->verificalogin("$usuario","$contraseña");

        $user->verificaemple("$usuario","$contraseña");

        $user->verificausuario("$usuario","$contraseña");

        $user->error("$usuario","$contraseña");
        ?>
    </div>    
    
</body>
</html>