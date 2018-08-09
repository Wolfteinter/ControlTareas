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
