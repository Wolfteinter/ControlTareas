<?php
include("../../conf/conexion.php");
$consulta="SELECT id,description,init_real_date,end_real_date,total_time FROM homework WHERE status='finished'";
$resultado = mysqli_query($enlace, $consulta);
while($row = mysqli_fetch_assoc($resultado)){
    $id=$row['id'];
    $description=$row['description'];
    $initDate=$row['init_real_date'];
    $endDate=$row['end_real_date'];
    $totalTime=$row['total_time'];

    $X = "<a href='javascript: void(0);' class='accion' onclick='show(".$id.")'>
    <img src='../../img/icons/eye-24.png' alt='X' title='Eliminar'>
    </a>";
    echo "<tr>";
        echo "<td width='28%'>".$description."</td>";
        echo "<td width='21%'>".$initDate."</td>";
        echo "<td width='21%'>".$endDate."</td>";
        echo "<td width='15%'>".$totalTime."</td>";
        echo "<td width='15%'>";
                echo $X;
        echo "</td>";
    echo "</tr>";
}


 ?>
