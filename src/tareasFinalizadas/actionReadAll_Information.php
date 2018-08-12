<?php
include("../../conf/conexion.php");
$consulta="SELECT * FROM homework WHERE status='finished'";
$resultado = mysqli_query($enlace, $consulta);
if($row = mysqli_fetch_assoc($resultado)){
    $description=$row['description'];
    $initDelivery=$row['delivery_date'];
    $initPlannedDate=$row['init_planned_date'];
    $EndPlannedDate=$row['end_planned_date'];
    $initRealDate=$row['init_real_date'];
    $endRealDate=$row['end_real_date'];
    $plannedTimeId=$row['planned_time_id'];

    $consultaT="SELECT ptime FROM planned_time WHERE id=".$plannedTimeId."";
    $resultadoT = mysqli_query($enlace, $consultaT);
    $rowT = mysqli_fetch_assoc($resultadoT);
    $plannedTimeId=$rowT['ptime'];

    $totalTime=$row['total_time'];
        echo "<tr>";
            echo "<td width='30%'>".$description."</td>";
            echo "<td width='10%'> ".$initDelivery."</td>";
            echo "<td width='10%'>".$initPlannedDate."</td>";
            echo "<td width='10%'>".$EndPlannedDate."</td>";
            echo "<td width='10%'>".$initRealDate."</td>";
            echo "<td width='10%'>".$endRealDate."</td>";
            echo "<td width='10%'>".$plannedTimeId."</td>";
            echo "<td width='10%'>".$totalTime."</td>";
        echo "</tr>";



}
 ?>
