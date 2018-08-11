<?php
    include("../../conf/conexion.php");
    // Build string query
    $query = "SELECT h.description, h.delivery_date, h.status, s.name, t.fullname FROM homework AS h INNER JOIN teacher_has_subject AS ths ON(ths.id = h.teacher_has_subject_id) INNER JOIN teacher AS t ON(t.id = ths.teacher_id) INNER JOIN subject AS s ON(s.id = ths.subject_id)";

    if($ans = mysqli_query($enlace, $query)) {
        while($row = mysqli_fetch_assoc($ans)) {
            $des = $row['description'];
            $deliveryDate = $row['delivery_date'];
            $status = ($row['status'] == 'finished') ? "Terminada" : "Pendiente";
            $subjectName = $row['name'];
            $teacher = $row['fullname'];

            echo "<tr>";
                echo "<td>".$des."</td>";
                echo "<td>".$deliveryDate."</td>";
                echo "<td>".$status."</td>";
                echo "<td>".$subjectName.", ".$teacher."</td>";
            echo "</tr>";
        }
    }
    else {
        // It happened an error
    }
?>
