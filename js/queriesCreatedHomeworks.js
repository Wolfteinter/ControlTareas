$(document).ready(function() {
    readHomeworks();
    getPlannedTimes();
    getTeachersHasSubjects();

    var modal = document.getElementById('modalAlumno');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            $('#clear').trigger('click');
            modal.style.display = "none";
        }
    }
});

$(document).on("submit", "form", function(e) {
    // Avoid the default action
    e.preventDefault();
    // Get data
    var _description = $('#description').val();
    var _delivery_date = $('#delivery_date').val();
    var _init_planned_date = $('#init_planned_date').val();
    var _init_planned_date_time = $('#init_planned_date_time').val();
    var _end_planned_date = $('#end_planned_date').val();
    var _end_planned_date_time = $('#end_planned_date_time').val();
    var _planned_time_id = $('#times').val();
    var _teacherHasSubject = $('#teacherHasSubject').val();

    // // Call the AJAX
    $.ajax({
        url: "saveHomework.php",
        type: "POST",
        data: {
            description: _description,
            delivery_date: _delivery_date,
            init_planned_date: _init_planned_date + "T" + _init_planned_date_time,
            end_planned_date: _end_planned_date + "T" + _end_planned_date_time,
            time: _planned_time_id,
            ths_id: _teacherHasSubject,
        },
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(ans, status, jqXHR) {
            if(ans.indexOf("error") > -1) {
                mostrarMensajeFlash("msj-danger", ans, 4000);
            }
            else {
               mostrarMensajeFlash("msj-success", ans, 4000);
               hide();
               readHomeworks();
            }
        }
    });
})

function getTeachersHasSubjects() {
    $.ajax({
        url: "getTeachersHasSubjects.php",
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(data, status, jqXHR) {
            $("#teacherHasSubject").html(data);
        }
    });
}

function getPlannedTimes() {
    $.ajax({
        url: "getPlannedTimes.php",
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(data, status, jqXHR) {
            $("#times").html(data);
        }
    });
}

function show(){
    $('#modalAlumno').css('display', 'block');
}

function hide(){
    $('#clear').trigger('click');
    $('#modalAlumno').css('display', 'none');
}

function readHomeworks() {
    $.ajax({
        url: "actionReadHomeworks.php",
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(data, status, jqXHR) {
            $(".registros").html(data);
        }
    });
}
