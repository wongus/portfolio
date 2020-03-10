$(document).ready(function(){
    $('.header').height($(window).height());
});

$(document).ready(function () {
    $('.navbar-toggler-icon').on('click', function () {

        $('.animated-icon1').toggleClass('is-active');
    });
});

$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'vertical',
        loop: true
    })
});
