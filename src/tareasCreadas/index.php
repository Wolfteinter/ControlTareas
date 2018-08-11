<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas creadas</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/formularios.css">
        <link rel="stylesheet" href="../../css/modal.css">
        <link rel="stylesheet" href="../../css/tablas.css">
        <!-- Scripts -->
        <script src="../../js/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="../../js/queriesCreatedHomeworks.js" charset="utf-8"></script>
        <script src="../../js/mensajesFlash.js"></script>
        <!-- Para mostrar mensajes flash bonitos -->
	    <link rel="stylesheet" href="../../css/iziToast.min.css">
	    <script src="../../js/iziToast.min.js" type="text/javascript"></script>
        <style media="screen">
            p {
                color: white;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <h1 class="titulo">Tareas creadas</h1>
        <div id="btn-new">
            <a onclick="show();" class="" >
            <img src="../../img/icons/añadir.png" alt="E" title="add">
             </a>
        </div>
        <?php
			include("../../vistas/layout/modalAddSubject.html");
		?>
        <table class="tabla-registros" style="width:90%;margin-top:50px;">
            <thead>
                <th>Descripción</th>
                <th>Fecha de entrega</th>
                <th>Estado</th>
                <th>Materia + Maestro</th>
            </thead>
            <tbody class="registros">
            </tbody>
        </table>
    </body>
</html>
