$(document).ready(function() {

    var url = location.pathname;
    console.log(url);

    if ("url:contains('index')") {
        $("#home").addClass('active');
        $("#projects").removeClass('active');
        $("#contact").removeClass('active');
    } else if ("url:contains('projects')") {
        $("#home").removeClass('active');
        $("#projects").addClass('active');
        $("#contact").removeClass('active');
    } else if ("url:contains('contact')") {
        $("#home").removeClas('active');
        $("#projects").removeClass('active');
        $("#contact").addClasss('active');
    }
});

$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('#navi').addClass('bg-2elev');
        $('#navi').removeClass('bg-1elev');
    } else {
        $('#navi').addClass('bg-1elev');
        $('#navi').removeClass('bg-2elev');
    }
});