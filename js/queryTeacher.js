function reedTeacher(){
    $.ajax({
        url: "actionReedTeacher.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}

function save(){
    var data=$('#nombre').val();
    if(withOutSpace(data)&&IsNotNull(data)){
        $.ajax({
            url: "actionSaveTeacher.php",
            data:{name:data},
            error: function(p1, p2, p3) {
                alert(p3);
            },
            success: function(ans, status, jqXHR) {
                if(ans.indexOf("error") > -1) {
                    mostrarMensajeFlash("msj-danger", ans, 4000);
                    $('#nombre').focus();
                }
                else {
                    mostrarMensajeFlash("msj-success", ans, 4000);
                    $('#nombre').val('');
                    reedTeacher();
                }
            }
        });
    }else{
        alert("Error de entrada");
    }


}

function erase(idDelete){
    if(confirmDelete()) {
        $.ajax({
            url: "actionDeleteTeacher.php",
            data:{id:idDelete},
            error: function(p1, p2, p3) {
                alert(p3);
            },
            success: function(ans, status, jqXHR) {
                if(ans.indexOf("error") > -1) {
                    mostrarMensajeFlash("msj-danger", ans, 4000);
                }
                else {
                    mostrarMensajeFlash("msj-success", ans, 4000);
                    reedTeacher();
                }
            }
        });
    }
}

function patch(idEditar) {
    $.ajax({
        url: "actionPatchTeacher.php",
        data: {
            id: idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            var d = JSON.parse(data);
            $('#nombre').val(d.fullname);
            $('#nombre').data('idEdit', d.id);
            $('#btnEnviar').val('Actualizar');
            $('#btnEnviar').attr('onclick', 'update();');
        }
    });
}

function update() {
    var _fullname = $('#nombre').val();
    var idEditar = $('#nombre').data('idEdit');

    $.ajax({
        url: "actionUpdateTeacher.php",
        data: {
            fullname : _fullname,
            id : idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(ans, status, jqXHR) {
            if(ans.indexOf("error") > -1) {
                $('#nombre').focus();
                mostrarMensajeFlash("msj-danger", ans, 4000);
            }
            else {
                reedTeacher();
                $("#nombre").removeData("idEdit");
                $('#nombre').val('');
                $('#btnEnviar').val('Guardar');
                mostrarMensajeFlash("msj-success", ans, 4000);
                $('#btnEnviar').attr('onclick', 'save();');
            }
        }
    });
}
