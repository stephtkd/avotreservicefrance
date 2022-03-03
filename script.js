$(document).ready(function() {
    $("button.top").click(function() {
        window.location.href = '#';
    })

    $("#ButtonContactMe").click(function() {
        $("#formContact").toggle(800);
    });
});