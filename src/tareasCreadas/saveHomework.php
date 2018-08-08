<?php
    include("../../conf/conexion.php");
    // Recover the form data
    $description = $_POST['description'];
    $deliveryDate = $_POST['delivery_date'];
    $initPlannedDate = $_POST['init_planned_date'];
    $endPlannedDate = $_POST['end_planned_date'];
    $subjectId = $_POST['subject'];
    $plannedId = $_POST['time'];

    // Build the string query
    $query = "INSERT INTO homework(description, delivery_date, init_planned_date, end_planned_date, planned_time_id, subject_id) VALUES('".$description."', '".$deliveryDate."', '".$initPlannedDate."', '".$endPlannedDate."', ".$plannedId.", ".$subjectId.")";
    echo $query;
    if($ans = mysqli_query($enlace, $query)) {
        echo "Tarea agregada";
    }
    else {
        echo "Ha ocurrido un error";
    }
?>
