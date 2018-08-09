<?php
include("../../conf/conexion.php");

$id = $_GET['id'];

$consultaBorrar = "DELETE FROM subject WHERE id=".$id;
if($resultado = mysqli_query($enlace, $consultaBorrar)) {
    echo "Se ha quitado la materia correctamente.";
}
else {
    echo "Ha ocurrido un error al tratar de quitar la materia.";
}
 ?>
