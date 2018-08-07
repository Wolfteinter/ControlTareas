function reedSubject(){
    $.ajax({
        url: "actionReedSubject.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}
