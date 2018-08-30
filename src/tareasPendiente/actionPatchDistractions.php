<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "SELECT id, social_networks, basic_needs, family, job, videogames, others FROM distraction WHERE homework_id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        $arr = mysqli_fetch_array($ans);
        $idDistractions = $arr[0];
        $socialNetworks = $arr[1];
        $basicNeeds = $arr[2];
        $family = $arr[3];
        $job = $arr[4];
        $videogames = $arr[5];
        $others = $arr[6];

        $myObj = new stdClass();
        $myObj->id = $idDistractions;
        $myObj->socialNetworks = $socialNetworks;
        $myObj->basicNeeds = $basicNeeds;
        $myObj->family = $family;
        $myObj->job = $job;
        $myObj->videogames = $videogames;
        $myObj->others = $others;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else {
        // Error
    }
 ?>
