$(document).ready(function() {

    var url = location.pathname;
    console.log(url);

    if ("url:contains('index')") {
        $(".navbar-nav li:nth-child(0)").addClass('active');
    } else if ("url:contains('projects')") {
        $(".navbar-nav li:nth-child(1)").addClass('active');
    } else ("url:contains('contact')")
    {
        $(".navbar-nav li:nth-child(2)").addClass('active');
    }

});