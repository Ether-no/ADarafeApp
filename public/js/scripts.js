// Inicia script para inmovilizar el navbar
var height = $('#header').height();

$(window).scroll(function() {
    if ($(this).scrollTop() > height) {
        $('.navbar').addClass('fixed-per');
    } else {
        $('.navbar').removeClass('fixed-per')
    }
});

// Finaliza script para inmobilizar el navbar