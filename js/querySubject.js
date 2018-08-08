function read(){
    reedSubject();
    reedTeacher();
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
    var nameSubject = $('#nombre').val();
    var idTeacher = $('#teachers').val();
    $('#nombre').val('');
    $.ajax({
        url: "actionSaveSubject.php",
        data:{
            name:nameSubject,
            id:idTeacher
        },
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            read();
        }
    });

}
