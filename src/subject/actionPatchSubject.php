<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "SELECT id, name FROM subject WHERE id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        $subject_arr = mysqli_fetch_array($ans);
        $idSubject = $subject_arr[0];
        $name = $subject_arr[1];

        $myObj = new stdClass();
        $myObj->id = $idSubject;
        $myObj->name = $name;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else {
        // Error
    }
 ?>
