<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas pendientes | Do-Do</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/tablas.css">
        <link rel="stylesheet" href="../../css/modal.css">
        <link rel="stylesheet" href="../../css/distractionModal.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryPendingHomeworks.js"></script>
        <script src="../../js/mensajesFlash.js"></script>
        <!-- Para mostrar mensajes flash bonitos -->
	    <link rel="stylesheet" href="../../css/iziToast.min.css">
	    <script src="../../js/iziToast.min.js" type="text/javascript"></script>
        <!-- Add favicon -->
        <link rel="icon" type="image/png" href="../../img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="../../img/favicon/favicon-16x16.png" sizes="16x16" />
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <h1 class="titulo">Tareas pendientes</h1>
        <?php
			include("../../vistas/layout/modalDistractions.html");
		?>
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
