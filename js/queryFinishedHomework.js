function read(){
    readHomework();
    readHomeworkAll_Information();
}

function readHomework(){
    limiteInf = $('#limitInf').val();
    limiteSup = $('#limitSup').val();
    $.ajax({
        url: "actionReadHomeworks.php",
        data:{
                fechaInit:limiteInf,
                fechaEnd:limiteSup
            },
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}
function readHomeworkAll_Information(){
    limiteInf = $('#limitInf').val();
    limiteSup = $('#limitSup').val();

    $.ajax({
        url: "actionReadAll_Information.php",
        data:{
                fechaInit:limiteInf,
                fechaEnd:limiteSup
            },
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            //alert(d);
            $('.all_information').html(d);
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
