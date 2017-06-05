// Script to initiate slick slider - front page top slider

jQuery(document).ready(function($){

    $('.mySlick').slick({
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });

    $('.bizSlick').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });

    $('.charSlick').slick({
        dots: false,
        arrows: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });





});

// 