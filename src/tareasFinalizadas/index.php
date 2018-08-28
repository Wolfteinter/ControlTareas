<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas Finalizadas</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/tablas.css">
        <link rel="stylesheet" href="../../css/modal.css">
        <link rel="stylesheet" href="../../css/formularios.css">

        <script src="../../js/jspdf.debug.js"></script>
	    <script src="../../js/generarReporte.js"></script>
        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryFinishedHomework.js"></script>
        <script src="../../js/validations.js"></script>
    </head>
    <body>
        <?php
			include("../../vistas/layout/modalView.html");
		?>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>

        <h1 class="titulo">Tareas finalizadas</h1>
        <div class="Dates">
            <input type="date" id="limitInf" name="" required>

            <input type="date" id="limitSup" name="" required>

            <input type="button" name="" value="Consultar" onclick="read();">
        </div>



        <table class="tabla-registros" style="width:90%;margin-top:20px;">
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
        <div hidden id="reporte" width="90%">
            <table >
                <header>
                    <td>Descripcion</td>
                    <td>F.entrega</td>
                    <td>F.Inicio P</td>
                    <td>F.Final P</td>
                    <td>F.Inicio R</td>
                    <td>F.Final R</td>
                    <td>T.Planeado</td>
                    <td>T.Total</td>

                </header>
                <tbody class="all_information">

                </tbody>
            </table>
        </div>
        <?php
			include("../../vistas/layout/modalNote.html");
		?>
        <div class="formulario"style="text-align:center; width:100%">
            <div class="botones" >
                <input type="button" id="nuevo" name="nuevo" value="Generar reporte" onclick="createNote()">
                    <!--<input type="button" id="nuevo" name="nuevo" value="Generar reporte" onclick="DescargarPDF('reporte','Reporte')">-->
    		</div>
        </div>




    <script>

    </script>

    </body>
</html>
