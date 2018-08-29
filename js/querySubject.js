function read(){
    reedSubject();
}
function reedSubject(){
    $.ajax({
        url: "actionReadSubject.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}
function save(){
    var nameSubject = $('#nombre').val();
    if(withOutSpace(nameSubject)&&IsNotNull(nameSubject)){
        $.ajax({
            url: "actionSaveSubject.php",
            data:{
                name:nameSubject
            },
            error: function(p1, p2, p3) {
                alert(p3);
            },
            success: function(d, status, jqXHR) {
                $('#nombre').val('');
                read();
            }
        });
    }else{
        alert("Error de entrada");
    }


}

function erase(idDelete){
    if(confirmDelete()) {
        $.ajax({
            url: "actionDeleteSubject.php",
            data:{id:idDelete},
            error: function(p1, p2, p3) {
                alert(p3);
            },
            success: function(d, status, jqXHR) {
                reedSubject();
            }
        });
    }
}

function patch(idEditar) {
    $.ajax({
        url: "actionPatchSubject.php",
        data: {
            id: idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            var d = JSON.parse(data);
            $('#nombre').val(d.name);
            $('#nombre').data('idEdit', d.id);
            $('#btnEnviar').val('Actualizar');
            $('#btnEnviar').attr('onclick', 'update();');
        }
    });
}

function update() {
    var _name = $('#nombre').val();
    var idEditar = $('#nombre').data('idEdit');

    $.ajax({
        url: "actionUpdateSubject.php",
        data: {
            name : _name,
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
                reedSubject();
                $("#nombre").removeData("idEdit");
                $('#nombre').val('');
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
