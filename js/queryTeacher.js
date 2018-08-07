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
    $.ajax({
        url: "actionSaveTeacher.php",
        data:{name:data},
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            reedTeacher();
        }
    });

}

function erase(idDelete){
    $.ajax({
        url: "actionDeleteTeacher.php",
        data:{id:idDelete},
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            reedTeacher();
        }
    });
}
function patch(idPatch){
    $.ajax({
        url: "actionPatchAula.php",
        data: {id: idEditar},
        error: function(p1, p2, p3) {
            estadoDefault();
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            estadoDefault();
            var d = JSON.parse(data);
            $('#auxiliar').val(d.id);
            $('#nombre').val(d.nombre);
            $('#btnEnviar').val('Actualizar');
        }
    });
}
