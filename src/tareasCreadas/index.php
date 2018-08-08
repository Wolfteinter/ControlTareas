<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tareas creadas</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/dashboard.css">
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
        <form class="" id="form-new-homework">
            <p><label for="description">Descripción</label></p>
            <p>
                <textarea id="description" name="descripción" rows="8" cols="80" required></textarea>
            </p>
            <p><label for="delivery_date">Fecha de entrega</label></p>
            <p>
                <input type="date" id="delivery_date" name="">
            </p>
            <p><label for="init_planned_date">Fecha planeada para iniciar</label></p>
            <p>
                <input type="datetime-local" id="init_planned_date" name="" required>
            </p>
            <p><label for="end_planned_date">Fecha planeada para terminar</label></p>
            <p>
                <input type="datetime-local" id="end_planned_date" name="" required>
            </p>
            <p><label for="subjects">Materia</label></p>
            <p>
                <select  id="subjects" class="" name="">
                </select>
            </p>
            <p><label for="times">Tiempo planeado</label></p>
            <p>
                <select  id="times" class="" name="">
                </select>
            </p>
            <div class="buttons">
                <input type="reset" name="" value="Limpiar">
                <input type="button" name="" value="Cancelar">
                <input type="submit" name="" value="Guardar">
            </div>
        </form>
    </body>
</html>
