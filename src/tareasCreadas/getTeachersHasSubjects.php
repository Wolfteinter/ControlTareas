<?php
    include("../../conf/conexion.php");
    // Build string query
    $query = "SELECT ths.id, s.name, t.fullname FROM teacher_has_subject AS ths INNER JOIN subject AS s ON(ths.subject_id = s.id) INNER JOIN teacher AS t ON(ths.teacher_id = t.id)";
    echo $query;
    if($ans = mysqli_query($enlace, $query)) {
        while($row = mysqli_fetch_array($ans)) {
            $id = $row[0];
            $content = $row[1]." >> ".$row[2];
            echo "<option value='".$id."'>".$content."</option>";
        }
    }
    else {
        // It happened an error
    }
?>
