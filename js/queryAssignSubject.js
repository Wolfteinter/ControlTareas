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
