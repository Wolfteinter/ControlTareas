<?php
    $name=$_GET['name'];
    include("../../conf/conexion.php");
    $consulta="INSERT INTO teacher(fullname) VALUES ('".$name."');";

    if($ans = mysqli_query($enlace, $consulta)) {
        echo "Se ha guardado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de guardar.";
    }
 ?>
