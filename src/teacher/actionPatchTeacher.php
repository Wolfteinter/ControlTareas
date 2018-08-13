<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "SELECT id, fullname FROM teacher WHERE id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        $teacher_arr = mysqli_fetch_array($ans);
        $idTeacher = $teacher_arr[0];
        $fullname = $teacher_arr[1];

        $myObj = new stdClass();
        $myObj->id = $idTeacher;
        $myObj->fullname = $fullname;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else {
        // Error
    }
 ?>
