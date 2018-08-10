<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas Finalizadas</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/tablas.css">
        <link rel="stylesheet" href="../../css/modal.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryFinishedHomework.js"></script>
        <script src="../../js/validations.js"></script>
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <?php
			include("../../vistas/layout/modalView.html");
		?>
        <h1 class="titulo">Tareas finalizadas</h1>
        <table class="tabla-registros" style="width:90%;margin-top:50px;">
            <thead>
                <th>Descripcion</th>
                <th>Fecha de inicio</th>
                <th>Fecha de finalizacion</th>
                <th>Tiempo Trascurrido</th>
                <th>Acciones</th>
            </thead>
            <tbody class="registros">
            </tbody>
        </table>

    <script>
    $(document).ready(function() {
        read();
    });
    </script>

    </body>
</html>
