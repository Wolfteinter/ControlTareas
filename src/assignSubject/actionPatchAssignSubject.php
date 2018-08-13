<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];

    $query = "SELECT ths.id, ths.subject_id, ths.teacher_id, s.name, t.fullname FROM teacher_has_subject AS ths INNER JOIN subject AS s ON(s.id = ths.subject_id) INNER JOIN teacher AS t ON(t.id = ths.teacher_id) WHERE ths.id=".$id;

    if($ans = mysqli_query($enlace, $query)) {
        $arr = mysqli_fetch_array($ans);
        $idThs = $arr[0];
        $idSubject = $arr[1];
        $idTeacher = $arr[2];
        $subjectName = $arr[3];
        $teacherFullname = $arr[4];
        
        // Stored options => see first
        $dataTeachers = "<option value='".$idTeacher."'>".$teacherFullname."</option>";

        $dataSubjects = "<option value='".$idSubject."'>".$subjectName."</option>";

        // Recover other teachers
        $query = "SELECT id, fullname FROM teacher WHERE id <> ".$idTeacher;
        if($ans = mysqli_query($enlace, $query)) {
            while($row = mysqli_fetch_assoc($ans)) {
                $dataTeachers .= "<option value='".$row['id']."'>".$row['fullname']."</option>";
            }
        }

        // Recover other subjects
        $query = "SELECT id, name FROM subject WHERE id <> ".$idSubject;
        if($ans = mysqli_query($enlace, $query)) {
            while($row = mysqli_fetch_assoc($ans)) {
                $dataSubjects .= "<option value='".$row['id']."'>".$row['name']."</option>";
            }
        }

        $myObj = new stdClass();
        $myObj->id = $idThs;
        $myObj->teachers = $dataTeachers;
        $myObj->subjects = $dataSubjects;
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else {
        // Error
    }
 ?>
