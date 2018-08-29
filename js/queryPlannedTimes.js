function read() {
    $.ajax({
        url: "actionReadPlannedTimes.php",
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}

function save() {
    var ptime = $('#ptime').val();
    if(withOutSpace(ptime) && IsNotNull(ptime)) {
        $.ajax({
            url: "actionSavePlannedTime.php",
            data: {
                time: ptime,
            },
            error: function(p1, p2, p3) {
                alert("Error: " + p3);
            },
            success: function(ans, status, jqXHR) {
                if(ans.indexOf("error") > -1) {
                    mostrarMensajeFlash("msj-danger", ans, 4000);
                    $('#ptime').focus();
                }
                else {
                    mostrarMensajeFlash("msj-success", ans, 4000);
                    $('#ptime').val('');
                    read();
                }
            }
        });
    }
    else {
        alert("Error de entrada");
    }
}

function del(idDelete) {
    if(confirmDelete()) {
        $.ajax({
            url: "actionDeletePlannedTime.php",
            data: {
                id: idDelete,
            },
            error: function(p1, p2, p3) {
                alert("Error: " + p3);
            },
            success: function(ans, status, jqXHR) {
                if(ans.indexOf("error") > -1) {
                    mostrarMensajeFlash("msj-danger", ans, 4000);
                }
                else {
                    mostrarMensajeFlash("msj-success", ans, 4000);
                    read();
                }
            }
        });
    }
}

function patch(_id) {
    $.ajax({
        url: "actionPatchPlannedTime.php",
        data: {
            id: _id,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            var d = JSON.parse(data);
            $('#ptime').val(d.ptime);
            $('#ptime').data('idEdit', d.id);
            $('#btnEnviar').val('Actualizar');
            $('#btnEnviar').attr('onclick', 'update();');
        }
    });
}

function update() {
    var _ptime = $('#ptime').val();
    var idEditar = $('#ptime').data('idEdit');

    $.ajax({
        url: "actionUpdatePlannedTime.php",
        data: {
            ptime : _ptime,
            id : idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(ans, status, jqXHR) {
            if(ans.indexOf("error") > -1) {
                $('#ptime').focus();
                mostrarMensajeFlash("msj-danger", ans, 4000);
            }
            else {
                read();
                $("#ptime").removeData("idEdit");
                $('#ptime').val('');
                $('#btnEnviar').val('Guardar');
                mostrarMensajeFlash("msj-success", ans, 4000);
                $('#btnEnviar').attr('onclick', 'save();');
            }
        }
    });
}


// Para confirmar el borrado de un elemento
function confirmDelete() {
    var x = confirm("¿Estás seguro?");
    if(x) return true;
    else return false;
}
