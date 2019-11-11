AOS.init();
var NavbarSticky = (function () {
    // Variables
    var $nav = $('.top-sticky'),
        navOffsetTop = 0,
        scrolling = false;
    // Methods
    function init($this) {
        // our current vertical position from the top
        var scrollTop = $(window).scrollTop(),
            navHeight = $this.outerHeight();
        if (scrollTop > (navOffsetTop + 200)) {
            $this.addClass('sticky');
            $("body").css("padding-top", navHeight + "px");
        } else {
            $this.removeClass('sticky');
            $("body").css("padding-top", "0");
        }
    }
    // Events
    if ($nav.length) {
        navOffsetTop = $nav.offset().top;
        $(window).on({
            'scroll': function () {
                scrolling = true;
                setInterval(function () {
                    if (scrolling) {
                        scrolling = false;
                        // Sticky navbar init
                        init($nav);
                    }
                }, 250);
            }
        })
    }
})();
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
$('.single-modelo--carousel').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    autoplay:false,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
});

$(document).ready(function () {
    // Validador de Formulario de contacto
    $('#metrowpForm').validate({
        rules: {
            nombreForm: {
                required: true,
                lettersonly: true,
            },
            telefonoForm: {
                required: true,
                digits: true,
                minlength: 9,
                maxlength: 9,
            },
            emailForm: {
                required: true,
                email: true,
            },
            rutForm: {
                required: true,
                Rut: true,
            },
        },
        messages: {
            nombreForm: "Nombre requerido, ingresa solo letras.",
            apellidoForm: "Apellido requerido, ingresa solo letras.",
            telefonoForm: {
                required: "Ingresa tu numero de telefono",
                minlength: jQuery.validator.format("Introduce al menos {0} carácteres."),
            },
            emailForm: {
                required: "Es necesario tu dirección de correo",
                email: "El formato de tu email debe ser similar a: name@example.com"
            },
            rutForm: "Ingresa un RUT valido.",
        },
        submitHandler: function (form) {},
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error)
        },
    });

    //Verificación de rut desde plugin, solo muestra datos en consola
    $('#rutForm').Rut({
        on_error: function () {
            console.log('Rut invalido');
        },
        on_success: function () {
            console.log('RUT válido');
        },
        format_on: 'keyup',
        //digito_verificador: "#digito-verificador",
        //format: false,

    });

    //Añade metodo RUT al validador
    $.validator.addMethod("Rut", function (value, element) {
        if ($.Rut.validar(value)) {
            return true;
        } else {
            return false;
        }
    }, "Debe ser un rut valido.");

    // Validación de sólo letras y espacio
    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Por favor ingresa sólo letras.");

    $('#btnCot').prop('disabled', true);
    $('#rutForm').on('blur keyup', function () {
        if ($("#metrowpForm").valid()) {
            $('#btnCot').prop('disabled', false);
        } else {
            $('#btnCot').prop('disabled', 'disabled');
        }
    });

    // Desactiva múltiples envíos
    jQuery(document).on('click', '.wpcf7-submit', function (e) {
        if (jQuery('.ajax-loader').hasClass('is-active')) {
            e.preventDefault();
            return false;
        }
    });
});