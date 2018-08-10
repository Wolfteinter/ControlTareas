function read(){
    readHomework();
}

function readHomework(){

    $.ajax({
        url: "actionReadHomeworks.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}

function show(idHomework){
    $.ajax({
        url: "actionReadHomeWorkModal.php",
        data:{id:idHomework},
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registrosModal').html(d);
            $('#modalAlumno').css('display', 'block');
        }
    });

}

function hide(){
    $('#modalAlumno').css('display', 'none');
}
