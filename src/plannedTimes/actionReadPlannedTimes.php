<?php
    include("../../conf/conexion.php");

    $query = "SELECT id, ptime FROM planned_time";

    $resultado = mysqli_query($enlace, $query);

    while($row = mysqli_fetch_assoc($resultado)){
        $time = $row['ptime'];
        $id = $row['id'];

        $X = "<a href='javascript: void(0);' class='accion' onclick='del(".$id.")'>
        <img src='../../img/icons/x-button.png' alt='X' title='Eliminar'>
        </a>";
        $A = "<a href='javascript: void(0);' class='accion' onclick='patch(".$id.")'>
        <img src='../../img/icons/pencil.png' alt='E' title='Editar'>
        </a>";

        echo "<tr>";
            echo "<td>".$time."</td>";
            echo "<td>".$X.$A."</td>";
        echo "</tr>";
    }
 ?>
