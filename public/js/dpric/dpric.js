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
    $(".dpric-awards").slick({
        dots: true,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '0',
        adaptiveHeight: false
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

// toggle nav
const nav = document.querySelector('.nav')
const openNavBtn = document.querySelector('.open-nav')
const closeNavBtn = document.querySelector('.close-nav')

openNavBtn.addEventListener('click', () => {
    nav.classList.remove('hidden')
    nav.classList.add('block')
    openNavBtn.classList.remove('block')
    openNavBtn.classList.add('hidden')
    closeNavBtn.classList.remove('hidden')
    closeNavBtn.classList.add('block')
})

closeNavBtn.addEventListener('click', () => {
    nav.classList.remove('block')
    nav.classList.add('hidden')
    closeNavBtn.classList.remove('block')
    closeNavBtn.classList.add('hidden')
    openNavBtn.classList.remove('hidden')
    openNavBtn.classList.add('block')
})
