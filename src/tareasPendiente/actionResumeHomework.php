<?php
    include("../../conf/conexion.php");
    $id = $_POST['id'];
    $today = new DateTime();
    $today = $today->format('Y-m-d H:i:s');

    $query = "UPDATE homework SET temp_time='".$today."' WHERE id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        echo "¡Tú puedes!";
    }
    else {
        echo "Ha ocurrido un error al tratar de reanudar el tiempo.";
    }
?>
