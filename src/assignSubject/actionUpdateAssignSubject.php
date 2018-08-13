<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];
    $idTeacher = $_GET['teacher'];
    $idSubject = $_GET['subject'];

    $query = "UPDATE teacher_has_subject SET teacher_id=".$idTeacher.", subject_id=".$idSubject." WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Se ha actualizado correctamente.";
    }
    else {
        echo "Ha ocurrido un error al tratar de actualizar.";
    }
 ?>
