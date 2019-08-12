$(document).ready(function(){
    // Owl Carousel
    let owl = $('.owl-carousel');
    owl.owlCarousel({
        stagePadding: 40,
        loop:false,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
});