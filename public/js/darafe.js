/* Inicia script carousel principal */
var elem = document.querySelector('.carousel');
var instance = M.Carousel.init(elem, {
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 100,
});

/* Finaliza script carousel pricipal */

/* Inicia Script select */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
});
/* Finaliza script select */

/* Inicia script activa modal */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});
/* Finaliza script activa modal */

/* Inicia script activa Sidebar y dropdown */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

$(".dropdown-trigger").dropdown();
/* Finaliza script activa Sidebar y dropdown */

// inicializa Swipeable Tabs
$(document).ready(function() {
    $('ul.tabs').tabs({
        swipeable: true,
    });
});
/* Finaliza Swipeable Tabs */


/* Inicia script count words textarea */
$(document).ready(function() {
    $('input#input_text, textarea#textarea2, textarea#descripcion').characterCounter();
});
/* Finaliza script count words textarea */

/* Inicia los tooltips */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
});
/* Finliza los tooltips */


/* Inicia Script activa carousel secundadio */
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 4,
            nav: true
        }
    }
});
$('.play').on('click', function() {
    owl.trigger('play.owl.autoplay', [4000])
})
$('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
    /* Finaliza Script activa carousel secundadio */