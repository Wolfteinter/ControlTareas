function read(){
    reedSubject();
    reedTeacher();
    reedAssignments();
}

function reedSubject(){
    $.ajax({
        url: "actionReadSubject.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('#subjects').html(d);
        }
    });
}

function reedTeacher(){
    $.ajax({
        url: "actionReadTeacher.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('#teachers').html(d);
        }
    });
}
function save(){
    var teacherId=$('#teachers').val();
    var subjectId=$('#subjects').val();
    $.ajax({
        url: "actionSaveTeacherHasSubject.php",
        data:{
            teacher:teacherId,
            subject:subjectId
        },
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            read();
        }
    });

}

function reedAssignments(){
    $.ajax({
        url: "actionReadTeacherHasSubject.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}

function patch(idEditar) {
    $.ajax({
        url: "actionPatchAssignSubject.php",
        data: {
            id: idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            var d = JSON.parse(data);
            $('#teachers').val(d.teachers);
            $('#subjects').val(d.subjects);
            $('#auxiliar').data('idEdit', d.id);
            $('#btnEnviar').val('Actualizar');
            $('#btnEnviar').attr('onclick', 'update();');
        }
    });
}

function update() {
    var _teacher = $('#teachers').val();
    var _subject = $('#subjects').val();
    var idEditar = $('#auxiliar').data('idEdit');

    $.ajax({
        url: "actionUpdateAssignSubject.php",
        data: {
            teacher: _teacher,
            subject: _subject,
            id: idEditar,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
        },
        success: function(ans, status, jqXHR) {
            if(ans.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", ans, 4000);
            }
            else {
                read();
                $("#auxiliar").removeData("idEdit");
                $('#btnEnviar').val('Guardar');
                mostrarMensajeFlash("msj-success", ans, 4000);
                $('#btnEnviar').attr('onclick', 'save();');
            }
        }
    });
}
