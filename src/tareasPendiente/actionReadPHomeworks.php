<?php
    include("../../conf/conexion.php");

    $query = "SELECT id, description, delivery_date, init_planned_date, end_planned_date, init_real_date FROM homework WHERE status='inProcess'";
    if($ans = mysqli_query($enlace, $query)) {
        while ($row = mysqli_fetch_assoc($ans)) {
            $id = $row['id'];
            $description = $row['description'];
            $delivery_date = $row['delivery_date'];
            $i_p_d = $row['init_planned_date'];
            $e_p_d = $row['end_planned_date'];

            if(!$row['init_real_date'] != NULL) {
                $play = "<a href='javascript: void(0);' class='accion' onclick='play(".$id.")'>
                <img src='../../img/icons/play.png' alt='play' title='Iniciar'>
                </a>";
                $pause = "";
                $stop = "";
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
                echo "<td>".$description."</td>";
                echo "<td>".$delivery_date."</td>";
                echo "<td>".$i_p_d."</td>";
                echo "<td>".$e_p_d."</td>";
                echo "<td>".$play.$pause.$stop."</td>";
            echo "</tr>";
        }
    }
?>
