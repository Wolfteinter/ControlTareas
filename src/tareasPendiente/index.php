<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas pendientes</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/tablas.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryPendingHomeworks.js"></script>
        <script src="../../js/mensajesFlash.js"></script>
        <!-- Para mostrar mensajes flash bonitos -->
	    <link rel="stylesheet" href="../../css/iziToast.min.css">
	    <script src="../../js/iziToast.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <!-- Read the teachers and display in the table -->
        <script type="text/javascript">
            $(document).ready(function() {
                readHomeworks();
            });
        </script>
        <h1 class="titulo">Tareas pendientes</h1>
        <table class="tabla-registros" style="width:90%;margin-top:50px;">
            <thead>
                <th>Descripción</th>
                <th>Fecha de entrega</th>
                <th>Inicio planeado</th>
                <th>Fin planeado</th>
                <th>Acciones</th>
            </thead>
            <tbody class="registros">
            </tbody>
        </table>
    </body>
</html>
