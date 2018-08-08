<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Menu</title>

        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/menu.css">
        <link rel="stylesheet" href="../../css/dashboard.css">

        <script src="../../js/jquery-3.3.1.js"></script>
        <script src="../../js/consultasDashboard.js"></script>
    </head>
    <body>
        <?php
        	include("../../vistas/layout/menu.php");
        ?>
        <!--This is the container of all elements of the dashboard-->
        <div id="container">
            <div id="menu">
                <!--This is the button to show the tasks that the date of delivery is today -->

                    <div id="cube-button">
                        <div class="button-action">
                            <button type="button" name="button">Hoy</button>
                        </div>
                        <div class="value-action">
                            <span>2</span>
                        </div>
                    </div>


                <!--This is the button to show the tasks that the date of delivery is in this week -->
                <div id="cube-button">
                    <div class="button-action">
                        <button type="button" name="button">Semana</button>
                    </div>
                    <div class="value-action">
                        <span>5</span>
                    </div>
                </div>
                <!--This is the button to show the tasks that the date of delivery is in this month -->
                <div id="cube-button">
                    <div class="button-action">
                        <button type="button" name="button">Mes</button>
                    </div>
                    <div class="value-action">
                        <span>13</span>
                    </div>
                </div>
                <!--This is the button to create a new task, it will be with a modal-->
                <div id="new">
                    <a href="" class="" >
			        <img src="../../img/icons/añadir.png" alt="E" title="add">
                     </a>
                </div>
            </div>
            <!--content is the container only of the datas of de dashboard -->
            <div id="content">
                <table id="data">
                    <tr>
                        <td align="center">
                            <!--this div is the total de tareas creadas-->
                            <a href="../tareasCreadas/">
                                <div id="box-border">
                                    <div id="cube-date">
                                        <div class="description">
                                            <span>Total de tareas creadas</span>
                                        </div>
                                        <!--this div is the value-->
                                        <div class="value">
                                            <span class="homeworkC"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td align="center">
                            <a href="../tareasPendiente/">
                                <div id="box-border">
                                    <div id="cube-date">
                                        <!--this div is the tareas en proceso-->
                                        <div class="description">
                                            <span>Tareas en proceso</span>
                                        </div>
                                        <!--this div is the value-->
                                        <div class="value">
                                            <span class="homeworkP"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td align="center">
                            <a href="../tareasFinalizadas/">
                                <div id="box-border">
                                    <div id="cube-date">
                                        <!--this div is the tareas finalizadas-->
                                        <div class="description">
                                            <span>Tareas finalizadas</span>
                                        </div>
                                        <!--this div is the value-->
                                        <div class="value">
                                            <span class="homeworkF"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                reed();
            });
        </script>
    </body>
</html>
