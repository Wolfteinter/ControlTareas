<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Materias</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/formularios.css">
        <link rel="stylesheet" href="../../css/tablas.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryPlannedTimes.js"></script>
        <script src="../../js/validations.js"></script>
        <script src="../../js/mensajesFlash.js"></script>
        <!-- Para mostrar mensajes flash bonitos -->
	    <link rel="stylesheet" href="../../css/iziToast.min.css">
	    <script src="../../js/iziToast.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <h1 class="titulo">Tiempos planeados</h1>
		<form id="formulario">
            <div class="entry">
                <input autocomplete="off" type="text" class="campo" id="ptime" name="tiempo" placeholder="Ej. 1 hora 10 minutos">
            </div>
			<div class="botones">
                <input class="btn-form" type="reset" id="borrar" value="Limpiar">
                <input class="btn-form" type="button" id="btnEnviar" value="Guardar" onclick="save();">
			</div>
		</form>
        <!-- Con el fin de mostrar los datos de la tabla al cargar el documento -->
            <table class="tabla-registros">
                <thead>
                    <th>Tiempo</th>
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
