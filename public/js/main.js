$(function () {

    AOS.init();
    new WOW().init();

    $('input[name=phone]').mask("+7 (999) 999-99-99");

    $('.scroll-btn').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1500);
        return false;
    });

    $('.scroll-btn2').click(function () {
        $(".hamburger").toggleClass('hamburger_active');
        $('.header').removeClass("slick_active")
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1500);
        return false;
    });

    $('.hamburger').on('click', function (e) {
        e.preventDefault;
        $(this).toggleClass('hamburger_active');
        return;
    });

    $('.hamburger').click(function () {
        if ($(".active__menu").is(":visible") == true) {
            $('.active__menu').hide();
            $('.header').removeClass("slick_active")
        } else {
            $('.active__menu').show();
            $(".header").addClass("slick_active")
        }
    });

    $('.close_navbar').on('click', function () {
        $('.active__menu').fadeOut();
    });


    $('.main-slick__carousel').slick({
        prevArrow: '<button class="slider-btn slider-btn__left"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="48" y="48" width="48" height="48" transform="rotate(180 48 48)" fill="#FFC52F"/><path d="M28.5 15L19.5 24L28.5 33" stroke="#141B23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
        nextArrow: '<button class="slider-btn slider-btn__right"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="#FFC52F" /><path d="M19.5 33L28.5 24L19.5 15" stroke="#141B23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></button > ',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    autoplay: true,
                    autoplaySpeed: 2500,
                    arrows: false
                }
            },
        ]
    })
});


