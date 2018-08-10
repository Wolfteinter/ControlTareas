<?php
    include("../../conf/conexion.php");
    $consulta="SELECT id,name FROM subject";
    $resultado = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_assoc($resultado)){
        $subject=$row['name'];
        $id=$row['id'];

        $X = "<a href='javascript: void(0);' class='accion' onclick='erase(".$id.")'>
        <img src='../../img/icons/x-button.png' alt='X' title='Eliminar'>
        </a>";
        $A = "<a href='javascript: void(0);' class='accion' onclick='patch(".$id.")'>
        <img src='../../img/icons/pencil.png' alt='E' title='Editar'>
        </a>";
        echo "<tr>";
            echo "<td width='70%'>".$subject."</td>";
            echo "<td width='30%'>";
                    echo $X.$A;
            echo "</td>";
        echo "</tr>";
    }


 ?>
