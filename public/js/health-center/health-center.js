const navbar = document.getElementById("navbar");
const openNav = document.getElementById("open-nav");
const closeNav = document.getElementById("close-nav");

openNav.addEventListener("click", () => {
    navbar.classList.remove("hidden");
    navbar.classList.remove("scale-0");
    navbar.classList.add("scale-100");
    // console.log(navbar.classList)
});

closeNav.addEventListener("click", () => {
    navbar.classList.remove("scale-100");
    navbar.classList.add("scale-0");
    navbar.classList.add("hidden");
    // console.log(navbar.classList)
});

// Main nav scroll effect
const mainNavBar = document.querySelector(".main-nav");
const smallNavBar = document.getElementById("small-nav");
const logo = document.getElementById("logo");

window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    const newWidth = Math.max(60, 100 - scrollY); // Minimum width of 100px
    const navPadding = Math.max(8, 16 - scrollY); // Minimum width of 100px
    logo.style.width = `${newWidth}px`;
    mainNavBar.style.paddingTop = `${navPadding}px`;
    mainNavBar.style.paddingBottom = `${navPadding}px`;

    if (scrollY > 50) {
        mainNavBar.classList.remove("bg-transparent");
        mainNavBar.classList.add("bg-purple-800");
        smallNavBar.classList.remove("bg-transparent");
        smallNavBar.classList.add("bg-purple-800");
    } else {
        mainNavBar.classList.remove("bg-purple-800");
        mainNavBar.classList.add("bg-transparent");
        smallNavBar.classList.add("bg-transparent");
        smallNavBar.classList.remove("bg-purple-800");
    }
});

// testimonials slider
$(document).ready(function () {
    $(".testimonials").slick({
        dots: true,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
        adaptiveHeight: true,
    });
});

$(document).ready(function () {
    $(".events").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: true,
        speed: 1000,
        cssEase: "linear",
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
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
    $(".center").slick({
        dots: true,
        centerMode: true,
        centerPadding: "60px",
        autoplay: true,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });

    $(".autoplay").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

$(document).ready(function () {
    $(".departmentSlider").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});
