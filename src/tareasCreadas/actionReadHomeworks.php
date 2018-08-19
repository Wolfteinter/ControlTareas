<?php
    include("../../conf/conexion.php");
    // Build string query
    $query = "SELECT h.description, h.delivery_date, h.status, s.name, t.fullname FROM homework AS h INNER JOIN teacher_has_subject AS ths ON(ths.id = h.teacher_has_subject_id) INNER JOIN teacher AS t ON(t.id = ths.teacher_id) INNER JOIN subject AS s ON(s.id = ths.subject_id) ORDER BY h.status";

    if($ans = mysqli_query($enlace, $query)) {
        while($row = mysqli_fetch_assoc($ans)) {
            $des = $row['description'];
            // Fecha para humanos
            setlocale(LC_TIME, 'es_ES.UTF-8');
            $deliveryDate = strftime("%A, %d de %B", strtotime($row['delivery_date']));
            $deliveryDate = ucfirst($deliveryDate);

            $status = ($row['status'] == 'finished') ? "Terminada" : "Pendiente";
            $subjectName = $row['name'];
            $teacher = $row['fullname'];

            if($status == "Pendiente") {
                $status = "<img src='../../img/icons/process.png' alt='pendiente' title='Pendiente'>";
            }
            else {
                $status = "<img src='../../img/icons/checked.png' alt='terminada' title='Terminada'>";
            }

            echo "<tr>";
                echo "<td width='40%' style='text-align: left'>".$des."</td>";
                echo "<td width='13%'>".$deliveryDate."</td>";
                echo "<td width='7%'>".$status."</td>";
                echo "<td width='40%'>".$subjectName.", ".$teacher."</td>";
            echo "</tr>";
        }
    }
    else {
        // It happened an error
    }
?>
