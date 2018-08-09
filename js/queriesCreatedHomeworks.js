$(document).ready(function() {
    getSubjects();
    getPlannedTimes();
});

$(document).on("submit", "form", function(e) {
    // Avoid the default action
    e.preventDefault();
    // Call the validation function
    // ------------
    // Get data
    var _description = $('#description').val();
    var _delivery_date = $('#delivery_date').val();
    var _init_planned_date = $('#init_planned_date').val();
    var _end_planned_date = $('#end_planned_date').val();
    var _subject_id = $('#subjects').val();
    var _planned_time_id = $('#times').val();
    console.log(_description);
    // // Call the AJAX
    $.ajax({
        url: "saveHomework.php",
        type: "POST",
        data: {
            description: _description,
            delivery_date: _delivery_date,
            init_planned_date: _init_planned_date,
            end_planned_date: _end_planned_date,
            subject: _subject_id,
            time: _planned_time_id,
        },
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(ans, status, jqXHR) {
            console.log(ans);
        }
    });
})

function getSubjects() {
    $.ajax({
        url: "getSubjects.php",
        error: function(arg1, arg2, arg3) {
            alert("Error: " + arg3);
        },
        success: function(data, status, jqXHR) {
            $("#subjects").html(data);
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
    $('#modalAlumno').css('display', 'none');
}
