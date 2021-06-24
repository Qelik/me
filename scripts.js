$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('#navi').addClass('bg-2elev');
        $('#navi').removeClass('bg-1elev');
    } else {
        $('#navi').addClass('bg-1elev');
        $('#navi').removeClass('bg-2elev');
    }
});
