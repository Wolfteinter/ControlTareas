function reed(){
    reedHomeworkCreated();
    reedHomeworkFineshed();
    reedHomeworkProcess();
}
function reedHomeworkCreated(){
    $.ajax({
        url: "actionGetHomeworkCreated.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.homeworkC').html(d);
        }
    });
}
function reedHomeworkFineshed(){
    $.ajax({
        url: "actionGetHomeworkFinished.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.homeworkF').html(d);
        }
    });
}
function reedHomeworkProcess(){
    $.ajax({
        url: "actionGetHomeworkInProcess.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.homeworkP').html(d);
        }
    });
}
function show(){
    $('#modalAlumno').css('display', 'block');
}

function hide(){
    $('#modalAlumno').css('display', 'none');
}
