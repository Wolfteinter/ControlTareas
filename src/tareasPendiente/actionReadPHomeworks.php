<?php
    include("../../conf/conexion.php");

    $query = "SELECT id, description, delivery_date, init_planned_date, end_planned_date, init_real_date, temp_time FROM homework WHERE status='inProcess' ORDER BY temp_time DESC";
    if($ans = mysqli_query($enlace, $query)) {
        while ($row = mysqli_fetch_assoc($ans)) {
            $id = $row['id'];
            $description = $row['description'];
            // Fecha para humanos
            setlocale(LC_TIME, 'es_ES.UTF-8');
            $delivery_date = strftime("%A, %d de %B", strtotime($row['delivery_date']));
            $delivery_date = ucfirst($delivery_date);

            $i_p_d = $row['init_planned_date'];
            $e_p_d = $row['end_planned_date'];
            $temp_time = $row['temp_time'];

            if($row['init_real_date'] == NULL) {
                $play = "<a href='javascript: void(0);' class='accion' onclick='play(".$id.")'>
                <img src='../../img/icons/play.png' alt='play' title='Iniciar'>
                </a>";
                $pause = "";
                $stop = "";
            }
            else if($temp_time == NULL) {
                $play = "<a href='javascript: void(0);' class='accion' onclick='resume(".$id.")'>
                <img src='../../img/icons/play.png' alt='resume' title='Reanudar'>
                </a>";
                $pause = "";
                $stop = "<a href='javascript: void(0);' class='accion' onclick='stop(".$id.")'>
                <img src='../../img/icons/stop.png' alt='stop' title='Detener'>
                </a>";
            }
            else {
                $play = "";
                $pause = "<a href='javascript: void(0);' class='accion' onclick='pause(".$id.")'>
                <img src='../../img/icons/pause.png' alt='pause' title='Pausar'>
                </a>";
                $stop = "<a href='javascript: void(0);' class='accion' onclick='stop(".$id.")'>
                <img src='../../img/icons/stop.png' alt='stop' title='Detener'>
                </a>";
            }

            echo "<tr>";
                echo "<td width='40%'>".$description."</td>";
                echo "<td>".$delivery_date."</td>";
                echo "<td>".$i_p_d."</td>";
                echo "<td>".$e_p_d."</td>";
                echo "<td width='98'>".$play.$pause.$stop."</td>";
            echo "</tr>";
        }
    }
?>
