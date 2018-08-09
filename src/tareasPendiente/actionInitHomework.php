<?php
    include("../../conf/conexion.php");
    $id = $_POST['id'];
    $today = new DateTime();
    $today = $today->format('Y-m-d H:i:s');

    $query = "UPDATE homework SET init_real_date='".$today."' WHERE id=".$id;
    echo $query;
    if($ans = mysqli_query($enlace, $query)) {
        echo "La tarea se ha iniciado";
    }
    else {
        echo "Ha ocurrido un error";
    }
?>
