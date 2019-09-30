AOS.init();
$('.carousel-home').owlCarousel({
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