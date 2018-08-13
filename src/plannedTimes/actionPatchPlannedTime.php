<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "SELECT id, ptime FROM planned_time WHERE id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        $planned_time_arr = mysqli_fetch_array($ans);
        $planned_time = $planned_time_arr[1];
        $idPTime = $planned_time_arr[0];

        $myObj = new stdClass();
        $myObj->id = $idPTime;
        $myObj->ptime = $planned_time;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else {
        // Error
    }
 ?>
