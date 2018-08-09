<?php
    $teacher=$_GET['teacher'];
    $subject=$_GET['subject'];
    include("../../conf/conexion.php");
    $consulta="INSERT INTO teacher_has_subject(teacher_id,subject_id) VALUES ('".$teacher."','".$subject."');";
    mysqli_query($enlace, $consulta);
 ?>
