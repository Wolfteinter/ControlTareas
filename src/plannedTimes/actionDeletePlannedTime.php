<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "DELETE FROM planned_time WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Se ha eliminado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de eliminar.";
    }
 ?>
