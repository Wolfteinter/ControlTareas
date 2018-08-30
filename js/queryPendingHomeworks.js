$(document).ready(function() {
    readHomeworks();
    var modal = document.getElementById('modalDistractions');

    window.onclick = function(event) {
        if (event.target == modal) {
            $('#clear').trigger('click');
            modal.style.display = "none";
        }
    }

    $("#updateDistractions").on("submit", function(e) {
        e.preventDefault();
        updateDistractions();
    });
});

function readHomeworks() {
    $.ajax({
        url: "actionReadPHomeworks.php",
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(data, status, jqXHR) {
            $(".registros").html(data);
        }
    });
}

// init timestamp
function play(varId) {
    $.ajax({
        type: "POST",
        url: "actionInitHomework.php",
        data: {
            id: varId,
        },
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(respuesta, status, jqXHR) {
            if(respuesta.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", respuesta, 4000);
            }
            else {
               mostrarMensajeFlash("msj-success", respuesta, 4000);
               readHomeworks();
            }
        }
    });
}

// add time in total_time
function pause(varId) {
    $.ajax({
        type: "POST",
        url: "actionPauseHomework.php",
        data: {
            id: varId,
        },
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(respuesta, status, jqXHR) {
            if(respuesta.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", respuesta, 4000);
            }
            else {
               mostrarMensajeFlash("msj-success", respuesta, 4000);
               readHomeworks();
            }
        }
    });
}

// resume the homework
function resume(varId) {
    $.ajax({
        type: "POST",
        url: "actionResumeHomework.php",
        data: {
            id: varId,
        },
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(respuesta, status, jqXHR) {
            if(respuesta.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", respuesta, 4000);
            }
            else {
               mostrarMensajeFlash("msj-success", respuesta, 4000);
               readHomeworks();
            }
        }
    });
}

// save the final total time, change status of homework
function stop(varId) {
    if(confirmarFinalizacion()) {
        $.ajax({
            type: "POST",
            url: "actionStopHomework.php",
            data: {
                id: varId,
            },
            error: function(arg1, arg2, arg3) {
                alert("Error: " + arg3);
            },
            success: function(respuesta, status, jqXHR) {
                if(respuesta.indexOf("error") > -1) {
                    mostrarMensajeFlash("msj-danger", respuesta, 4000);
                }
                else {
                   mostrarMensajeFlash("msj-success", respuesta, 4000);
                   readHomeworks();
                }
            }
        });
    }
}

function confirmarFinalizacion() {
    var x = confirm("Confirmar, finalizar tarea.");
    if(x) return true;
    else return false;
}

function addDelays(varId) {
    $('#modalDistractions').css('display', 'block');

    $.ajax({
        url: "actionPatchDistractions.php",
        data: {
            id: varId,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            console.log(data);
            var d = JSON.parse(data);
            $('#socialNetworks').val(d.socialNetworks);
            $('#basicNeeds').val(d.basicNeeds);
            $('#family').val(d.family);
            $('#job').val(d.job);
            $('#videogames').val(d.videogames);
            $('#others').val(d.others);
            // Save the id
            $("#updateDistractions").data("varId", d.id);
        }
    });

}

function hide(){
    $('#clear').trigger('click');
    $('#modalDistractions').css('display', 'none');
}

function inc(varId) {
    var input = $("#"+varId).val();
    $("#"+varId).val(parseInt(input)+1);
}

function dec(varId) {
    var input = $("#"+varId).val();
    if(parseInt(input) != 0) $("#"+varId).val(parseInt(input) - 1);
}

function updateDistractions() {
    var _id = $("#updateDistractions").data("varId");
    var _socialNetworks = $("#socialNetworks").val();
    var _basicNeeds = $("#basicNeeds").val();
    var _family = $("#family").val();
    var _job = $("#job").val();
    var _videogames = $("#videogames").val();
    var _others = $("#others").val();

    $.ajax({
        url: "actionUpdateDistractions.php",
        data: {
            social_networks : _socialNetworks,
            basic_needs: _basicNeeds,
            family: _family,
            job: _job,
            videogames: _videogames,
            others: _others,
            id : _id,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(ans, status, jqXHR) {
            if(ans.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", ans, 4000);
            }
            else {
                $("#updateDistractions").removeData("varId");
                mostrarMensajeFlash("msj-success", ans, 4000);
                hide();
            }
        }
    });
}
