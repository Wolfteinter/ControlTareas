<?php
include("../../conf/conexion.php");
$consulta="SELECT id,teacher_id,subject_id FROM teacher_has_subject";
$resultado = mysqli_query($enlace, $consulta);
while($row = mysqli_fetch_assoc($resultado)){
    $id=$row['id'];
    $teacher=$row['teacher_id'];
    $subject=$row['subject_id'];

    $consultaTeacher="SELECT fullname FROM teacher WHERE id=".$teacher."";
    $resultadoTeacher = mysqli_query($enlace, $consultaTeacher);
    $rowTeacher = mysqli_fetch_assoc($resultadoTeacher);
    $teacher=$rowTeacher['fullname'];

    $consultaSubject="SELECT name FROM subject WHERE id=".$subject."";
    $resultadoSubject = mysqli_query($enlace, $consultaSubject);
    $rowSubject = mysqli_fetch_assoc($resultadoSubject);
    $subject=$rowSubject['name'];

    $X = "<a href='javascript: void(0);' class='accion' onclick='erase(".$id.")'>
    <img src='../../img/icons/x-button.png' alt='X' title='Eliminar'>
    </a>";
    $A = "<a href='javascript: void(0);' class='accion' onclick='patch(".$id.")'>
    <img src='../../img/icons/pencil.png' alt='E' title='Editar'>
    </a>";
    echo "<tr>";
        echo "<td width='40%'>".$teacher."</td>";
        echo "<td width='40%'>".$subject."</td>";
        echo "<td width='20%'>".$X.$A."</td>";
    echo "</tr>";
}

 ?>
