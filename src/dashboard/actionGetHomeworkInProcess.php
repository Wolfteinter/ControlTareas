<?php
    include("../../conf/conexion.php");
    $consulta="SELECT COUNT(id) FROM homework WHERE status='inProcess'";
    $resultado = mysqli_query($enlace, $consulta);
    $row = mysqli_fetch_assoc($resultado);
    $res=$row['COUNT(id)'];
    echo "".$res;
 ?>
