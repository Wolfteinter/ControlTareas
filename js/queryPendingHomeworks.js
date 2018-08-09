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
            console.log(respuesta);
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

}

// save the final total time, change status of homework
function stop(varId) {

}
