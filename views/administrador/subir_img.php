<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\bootstrap.min.css">
    <title>imagen</title>
</head>
<?php
    echo '<pre>';
     print_r($_FILES);
     echo '</pre>';
?>

<body>
     <center><h3>Guardar imagen</h3></center>
     <div class="container">
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="imagen">
            </div>
            <input type="submit" name="save" class="btn btn-primary">
        </form>
        <br>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Imagen</td>
            </tr>
        </table>
        </div>
</div>


    <script src="..\js\bootstrap.min.js"></script>
</body>
</html>