<?php
$server = "localhost";
$user = "root";
$pass = "";
$databaseInicial = "task_controller";

$enlaceInicial = new mysqli($server, $user, $pass, $databaseInicial);
if($enlaceInicial->connect_errno) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Poder ver los warnings, '0' <=> '1'
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Definir el juego de carácteres con el que se trabaja
$charset = "utf8";
mysqli_set_charset ($enlaceInicial , $charset);

?>
