<?php
    include("../../conf/conexion.php");
    // Build string query
    $queryGetSubjects = "SELECT id, name FROM subject ORDER BY name";
    // Eject the function
    if($ans = mysqli_query($enlace, $queryGetSubjects)) {
        while($row = mysqli_fetch_assoc($ans)) {
            $id = $row['id'];
            $name = $row['name'];
            echo "<option value='".$id."'>".$name."</option>";
        }
    }
    else {
        // It happened an error
    }
?>
