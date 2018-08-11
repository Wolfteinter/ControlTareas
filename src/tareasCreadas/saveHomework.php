<?php
    include("../../conf/conexion.php");
    // Recover the form data
    $description = $_POST['description'];
    $deliveryDate = $_POST['delivery_date'];
    $initPlannedDate = $_POST['init_planned_date'];
    $endPlannedDate = $_POST['end_planned_date'];
    $plannedId = $_POST['time'];

    $ths_id = $_POST['ths_id'];

    // Build the string query for insert new homework
    $query = "INSERT INTO homework(description, delivery_date, init_planned_date, end_planned_date, planned_time_id, teacher_has_subject_id) VALUES('".$description."', '".$deliveryDate."', '".$initPlannedDate."', '".$endPlannedDate."', ".$plannedId.", ".$ths_id.")";

    if($ans = mysqli_query($enlace, $query)) {
        echo "Tarea agregada.";
    }
    else {
        echo "Ha ocurrido un error";
    }
?>
