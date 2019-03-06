$(document).ready(function () {
    $(window).load(function () {
        $('.loader').delay(2000).fadeOut(500);
        $('#overlayer').delay(2000).fadeOut(1500);
        $('.mdb-select').materialSelect();
        $('.alert').alert();        
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
