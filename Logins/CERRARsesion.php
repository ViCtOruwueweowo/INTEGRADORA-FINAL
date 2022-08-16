<?php

use MyApp\Query\login;
require("../../vendor/autoload.php");

$sesion = new login();
$sesion->cerrarSesion();