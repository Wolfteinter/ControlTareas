<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];
    $fullname = $_GET['fullname'];

    $query = "UPDATE teacher SET fullname='".$fullname."' WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Se ha actualizado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de actualizar.";
    }
 ?>
