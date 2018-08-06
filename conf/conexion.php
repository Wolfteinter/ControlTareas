<?php
    include("conexionInicial.php");

    $consultaInicial = "SELECT nombre FROM actual";
    $resultado = mysqli_query($enlaceInicial, $consultaInicial);
    $row = mysqli_fetch_assoc($resultado);
    $database=$row['nombre'];

    $enlace = new mysqli($server, $user, $pass, $database);
    if($enlace->connect_errno) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // Poder ver los warnings, '0' <=> '1'
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // Definir el juego de carácteres con el que se trabaja
    $charset = "utf8";
    mysqli_set_charset ($enlace , $charset);

?>
