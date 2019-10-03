AOS.init();
// carousel intro
var sync1 = $('.carousel-home'),
    sync2 = $('.carousel-titulo');

 //Sync sync2 by sync1
sync1.on('click', '.owl-next', function () {
    sync2.trigger('next.owl.carousel')
});
sync1.on('click', '.owl-prev', function () {
    sync2.trigger('prev.owl.carousel')
});
//Sync sync1 by sync2
sync2.on('click', '.owl-next', function () {
    sync1.trigger('next.owl.carousel')
});
sync2.on('click', '.owl-prev', function () {
    sync1.trigger('prev.owl.carousel')
});

sync1.owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
});

sync2.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    dots:false,
    nav:false,
    autoplay:true,
    autoplayTimeout:5000
});

$('.carousel-proyecto').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
});
$('.terminaciones-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
});
$('.galeria-carousel').owlCarousel({
    center: true,
    stagePadding: 50,
    loop:true,
    margin:30,
    dots:false,
    nav:true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            stagePadding: 30,
            margin:10,
            items:1
        },
        992:{
            items:2
        }
    }
});
$('.barrio-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
});
$('body').scrollspy({ target: '#navbarProyecto' });
$('#navbarProyecto .nav-link').click(function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(sectionTo).offset().top
    }, 1500);
});
$('.single-modelo--carousel').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
});