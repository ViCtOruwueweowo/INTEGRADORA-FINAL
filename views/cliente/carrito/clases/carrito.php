<?php

require '../config/config.php';

if(isset($_POST['CVE_P'])){

$id = $_POST['CVE_P'];
$token = $_POST['token'];

$token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    
    if($token == $token_tmp) {

if(isset($_SESSION['carrito']['PRODUCTOS'][$id])){
    $_SESSION['carrito']['PRODUCTOS'][$id]+=1;
}else{
        $_SESSION['carrito']['PRODUCTOS'][$id]=1;
}

$datos['numero']=count( $_SESSION['carrito']['PRODUCTOS']);
$datos['ok'] = true;
    } else {
        $datos['ok'] = false;
    }
} else {
    $datos['ok'] = false;
}

echo json_encode($datos);