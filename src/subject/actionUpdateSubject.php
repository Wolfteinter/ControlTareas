<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];
    $name = $_GET['name'];

    $query = "UPDATE subject SET name='".$name."' WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Se ha actualizado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de actualizar.";
    }
 ?>
