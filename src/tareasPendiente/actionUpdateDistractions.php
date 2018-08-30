<?php
    include("../../conf/conexion.php");

    $id = $_GET['id'];
    $socialNetworks = $_GET['social_networks'];
    $basicNeeds = $_GET['basic_needs'];
    $family = $_GET['family'];
    $job = $_GET['job'];
    $videogames = $_GET['videogames'];
    $others = $_GET['others'];

    $query = "UPDATE distraction SET social_networks=".$socialNetworks.", basic_needs=".$basicNeeds.", family=".$family.", job=".$job.", videogames=".$videogames.", others=".$others." WHERE id=".$id;

    if($resultado = mysqli_query($enlace, $query)) {
        echo "Distracciones agregadas correctamente.";
    }
    else {
        echo "Ha ocurrido un error.";
    }
?>
