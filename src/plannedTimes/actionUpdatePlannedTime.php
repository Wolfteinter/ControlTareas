<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];
    $ptime = $_GET['ptime'];

    $query = "UPDATE planned_time SET ptime='".$ptime."' WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Se ha actualizado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de actualizar.";
    }
 ?>
