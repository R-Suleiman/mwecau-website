
AOS.init();

$(document).ready(function () {
    $(".dpric-news").slick({
        dots: true,
        infinite: true,
        centerPadding: '5px',
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
        slidesToShow: 2,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".dpric-units").slick({
        dots: true,
        infinite: true,
        centerPadding: '5px',
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
        fade:true,
        adaptiveHeight: true,
    });
});
