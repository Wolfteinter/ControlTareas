<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Asignación materias | Do-Do</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/formularios.css">
        <link rel="stylesheet" href="../../css/tablas.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/queryAssignSubject.js"></script>
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
        <!--<div class="titulo">
			<h1>Catálogo: Materias</h1>
		</div>
    -->
		<form id="formulario">
            <div class="entry">


                <div class="box-input">
                    <div class="select">
                        <select class="" id="teachers">
                        </select>
                    </div>

                </div>

                <div class="box-input-right">
                    <div class="select">
                        <select class="" id="subjects">
                        </select>
                    </div>
                </div>

            </div>
			<div class="botones-Catalogo">
                <input class="btn-form" type="reset" id="borrar" value="Limpiar">
                <input class="btn-form" type="button" id="btnEnviar" value="Guardar" onclick="save();">
			</div>
		</form>
        <!-- Con el fin de mostrar los datos de la tabla al cargar el documento -->
        <p id="auxiliar"></p>

            <table class="tabla-registros">
                <thead>
                    <th>Profesor</th>
                    <th>Materia</th>
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
