<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Materias</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">

        <link rel="stylesheet" href="../../css/formularios.css">
        <link rel="stylesheet" href="../../css/tablas.css">

        <script src="../../js/querySubject.js"></script>
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
                <input autocomplete="off" type="text" class="campo" id="nombre" name="nombre" placeholder="Nombre de la materia">
            </div>
			<div class="botones">
                <input class="btn-form" type="reset" id="borrar" value="Limpiar">
                <input class="btn-form" type="button" id="btnEnviar" value="Guardar" onclick="guardar();">
			</div>
		</form>
        <!-- Con el fin de mostrar los datos de la tabla al cargar el documento -->
        <script type="text/javascript">
            $(document).ready(function() {
                reedSubject();
            });
        </script>
        <p id="auxiliar"></p>
        <table class="tabla-registros">
            <thead>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody class="registros">
            </tbody>
        </table>

    </body>
</html>
