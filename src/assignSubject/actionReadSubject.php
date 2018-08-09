<?php
include("../../conf/conexion.php");
# Para obtener las materias que lleva un grupo y los profesores de esas materias
$consulta = "SELECT id, name FROM subject";
echo "<option value=''>Seleccione una materia</option>";
if ($resultado = mysqli_query($enlace, $consulta)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $id = $row['id'];
        $name = $row['name'];
        echo "<option value='".$id."'>".$name."</option>";
    }
}

 ?>
