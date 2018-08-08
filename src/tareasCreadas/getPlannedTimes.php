<?php
    include("../../conf/conexion.php");
    // Build string query
    $queryGetPTimes = "SELECT id, ptime FROM planned_time ORDER BY ptime";
    // Eject the function
    if($ans = mysqli_query($enlace, $queryGetPTimes)) {
        while($row = mysqli_fetch_assoc($ans)) {
            $id = $row['id'];
            $time = $row['ptime'];
            echo "<option value='".$id."'>".$time."</option>";
        }
    }
    else {
        // It happened an error
    }
?>
