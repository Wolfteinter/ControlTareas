<?php
    include("../../conf/conexion.php");
    $consulta="SELECT id,fullname FROM teacher";
    $resultado = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_assoc($resultado)){
        $teacher=$row['fullname'];
        $id=$row['id'];

        $X = "<a href='javascript: void(0);' class='accion' onclick='erase(".$id.")'>
        <img src='../../img/icons/x-button.png' alt='X' title='Eliminar'>
        </a>";
        $A = "<a href='javascript: void(0);' class='accion' onclick='patch(".$id.")'>
        <img src='../../img/icons/pencil.png' alt='E' title='Editar'>
        </a>";
        echo "<tr>";
            echo "<td width='70%'>".$teacher."</td>";

            echo "<td width='30%'>";
                echo "<div class='accions-icon'>";
                    echo $X.$A;
                echo "</div>";
            echo "</td>";
        echo "</tr>";
    }

 ?>
