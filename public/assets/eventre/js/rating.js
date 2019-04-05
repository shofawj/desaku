$(document).ready(function () {
    $('.bar span').hide();
    $('#bar-five').animate({
        width: '75%'
    }, 1000);
    $('#bar-four').animate({
        width: '100%'
    }, 1000);
    $('#bar-three').animate({
        width: '20%'
    }, 1000);
    $('#bar-two').animate({
        width: '15%'
    }, 1000);
    $('#bar-one').animate({
        width: '100%'
    }, 1000);

    setTimeout(function () {
        $('.bar span').fadeIn('slow');
    }, 1000);

});

function isNegative() {
    var $rooms = $("#noOfRoom");
    var c = $rooms.val();

    if (c >= 0) {
        //b--;
        //$rooms.val(b);
    } else {
        $("#subs").prop("disabled", true);
        $rooms.val(0);
        alert('Jen kladne hodnoty!');
    }
}

$('#adds').click(function add() {
    var $rooms = $("#noOfRoom");
    var a = $rooms.val();

    a++;
    $("#subs").prop("disabled", !a);
    $rooms.val(a);

    $("#noOfRoom").trigger(isNegative());
});

$("#subs").prop("disabled", !$("#noOfRoom").val());

$('#subs').click(function subst() {
    var $rooms = $("#noOfRoom");
    var b = $rooms.val();
    if (b >= 1) {
        b--;
        $rooms.val(b);
    } else {
        $("#subs").prop("disabled", true);
    }
});
