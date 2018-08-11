<?php
    include("../../conf/conexion.php");
    $id = $_POST['id'];
    $today = new DateTime();
    $error = "Ha ocurrido un error";

    // Get temp_time, and add dif with today in total_time
    $query = "SELECT temp_time, total_time FROM homework WHERE id=".$id;
    if($ans = mysqli_query($enlace, $query)) {
        $ans = mysqli_fetch_array($ans);
        $totalTime = $ans[1];
        if($ans[0] == NULL) { // when, it's pause > O
            $hours = 0;
            $min = $totalTime;
        }
        else { // when, it's running  || O
            $tempTime = new DateTime($ans[0]);
            $interval = $today->diff($tempTime);
            $hours = $interval->h;
            $min = $interval->i + $hours*60;
        }

        // Formatting today for end_real_time
        $today = $today->format('Y-m-d H:i:s');

        // Add and update total_time
        if($totalTime != NULL and $ans[0] != NULL) {
            $min = $min + $totalTime;
            $query = "UPDATE homework SET total_time=".$min.", status='finished', end_real_date='".$today."' WHERE id=".$id;
        }
        // Update total_time
        else {
            $query = "UPDATE homework SET total_time=".$min.", status='finished', end_real_date='".$today."' WHERE id=".$id;
        }

        if($ans = mysqli_query($enlace, $query)) {
            $hours = round($min / 60);
            $mins = $min % 60;
            echo "Usted finalizó en ".$hours." h + ".$mins." min.";
        }
        else {
            echo $error;
        }
    }
    else {
        echo $error;
    }
?>
