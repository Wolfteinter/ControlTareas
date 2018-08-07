<?php
    include("../../conf/conexion.php");
    $consulta="SELECT name FROM subject";
    $resultado = mysqli_query($enlace, $consulta);
    $row = mysqli_fetch_assoc($resultado);
    $res=$row['name'];
    echo "".$res;


 ?>
