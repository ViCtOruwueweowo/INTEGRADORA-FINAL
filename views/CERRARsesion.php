<?php

use MyApp\Query\Login;
require("../vendor/autoload.php");

$session = new Login();
$session->cerrarSesion();