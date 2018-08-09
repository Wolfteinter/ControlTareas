<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas creadas</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/formularios.css">
        <link rel="stylesheet" href="../../css/modal.css">
        <!-- Scripts -->
        <script src="../../js/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="../../js/queriesCreatedHomeworks.js" charset="utf-8"></script>
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
        <div id="btn-new">
            <a onclick="show();" class="" >
            <img src="../../img/icons/añadir.png" alt="E" title="add">
             </a>
        </div>
        <?php
			include("../../vistas/layout/modalAddSubject.html");
		?>

    </body>
</html>
