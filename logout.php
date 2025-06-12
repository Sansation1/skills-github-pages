<?php
session_start();
require 'Conexion/Config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location:Login.php");
exit();
?>

