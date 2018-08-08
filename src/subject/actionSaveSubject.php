<?php
    $name=$_GET['name'];
    $id=$_GET['id'];
    include("../../conf/conexion.php");
    $consulta="INSERT INTO subject(name,teacher_id) VALUES ('".$name."','".$id."');";
    mysqli_query($enlace, $consulta);
 ?>
