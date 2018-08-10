<?php
    include("../../conf/conexion.php");
    $id = $_POST['id'];
    $today = new DateTime();
    $error = "Ha ocurrido un error";

    // Get temp_time
    $query = "SELECT temp_time, total_time FROM homework WHERE id=".$id;
    if($ans = mysqli_query($enlace, $query)) {
        $ans = mysqli_fetch_array($ans);
        $totalTime = $ans[1];
        $tempTime = new DateTime($ans[0]);
        $interval = $today->diff($tempTime);
        $hours = $interval->h;
        $min = $interval->i + $hours*60;

        // Add and update total_time
        if($totalTime != NULL) {
            $total = $min + $totalTime;
            $query = "UPDATE homework SET total_time=".$total.", temp_time=NULL";
        }
        // Update total_time
        else {
            $query = "UPDATE homework SET total_time=".$min.", temp_time=NULL";
        }

        if($ans = mysqli_query($enlace, $query)) {
            $hours = round($min / 60);
            $mins = $min % 60;
            echo "Se han sumado ".$hours." h + ".$mins." min.";
        }
        else {
            echo $error;
        }
    }
    else {
        echo $error;
    }
?>
