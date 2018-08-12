<?php
    $time = $_GET['time'];
    include("../../conf/conexion.php");

    $query = "INSERT INTO planned_time(ptime) VALUES ('".$time."');";

    if($ans = mysqli_query($enlace, $query)) {
        echo "Se ha guardado correctamente.";
    }
    else {
        echo "Ha ocurrido un error.";
    }
 ?>
