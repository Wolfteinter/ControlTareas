<?php
$id=$_GET['id'];
include("../../conf/conexion.php");
$consulta="SELECT *FROM homework WHERE id=".$id."";
$resultado = mysqli_query($enlace, $consulta);
if($row = mysqli_fetch_assoc($resultado)){
    $description=$row['description'];
    $initDelivery=$row['delivery_date'];
    $initPlannedDate=$row['init_planned_date'];
    $initEndPlannedDate=$row['end_planned_date'];
    $initRealDate=$row['init_real_date'];
    $endRealDate=$row['end_real_date'];
    $plannedTimeId=$row['planned_time_id'];

    $consultaT="SELECT ptime FROM planned_time WHERE id=".$plannedTimeId."";
    $resultadoT = mysqli_query($enlace, $consultaT);
    $rowT = mysqli_fetch_assoc($resultadoT);
    $plannedTimeId=$rowT['ptime'];

    $totalTime=$row['total_time'];

    echo "<tr>";
        echo "<td><b>Descripcion : </b>".$description."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Fecha de entrega : </b>".$initDelivery."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Fecha planeada de inicio : </b>".$initPlannedDate."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Fecha planeada de finalizacion : </b>".$initEndPlannedDate."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Fecha real de inicio : </b>".$initRealDate."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Fecha real de finalizacion : </b>".$endRealDate."";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Tiempo planeado : </b>".$plannedTimeId."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><b>Tiempo real : </b>".$totalTime."</td>";
    echo "</tr>";

}
 ?>
