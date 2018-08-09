<?php
    $name=$_GET['name'];
    include("../../conf/conexion.php");
    $consulta="INSERT INTO subject(name) VALUES ('".$name."');";
    mysqli_query($enlace, $consulta);
 ?>
