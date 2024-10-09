const navbar = document.getElementById('navbar');
const openNav = document.getElementById('open-nav');
const closeNav = document.getElementById('close-nav');

openNav.addEventListener('click', () => {
    navbar.classList.remove('hidden');
    navbar.classList.remove('scale-0');
    navbar.classList.add('scale-100');
    // console.log(navbar.classList)
});

closeNav.addEventListener('click', () => {
    navbar.classList.remove('scale-100');
    navbar.classList.add('scale-0');
    navbar.classList.add('hidden');
    // console.log(navbar.classList)
});

// Main nav scroll effect
const mainNavBar = document.getElementById('main-nav');
const smallNavBar = document.getElementById('small-nav');
const mainSection = document.getElementById('main-section');
const logo = document.getElementById('logo');
const smallHeader = document.getElementById('small-header');

const mainSectionHeight = mainSection.offsetHeight
window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    const newWidth = Math.max(60, 150 - scrollY); // Minimum width of 100px
    const navPadding = Math.max(8, 16 - scrollY); // Minimum width of 100px
    logo.style.width = `${newWidth}px`;
    mainNavBar.style.paddingTop = `${navPadding}px`;
    mainNavBar.style.paddingBottom = `${navPadding}px`;

    if (scrollY > 50) {
        mainNavBar.classList.remove('bg-transparent');
        mainNavBar.classList.add('bg-purple-800');
        smallNavBar.classList.remove('bg-transparent');
        smallNavBar.classList.add('bg-purple-800');
        smallHeader.classList.remove('hidden')
    } else {
        mainNavBar.classList.remove('bg-purple-800');
        mainNavBar.classList.add('bg-transparent');
        smallNavBar.classList.add('bg-transparent');
        smallNavBar.classList.remove('bg-purple-800');
        smallHeader.classList.add('hidden')
    }
});

// testimonials slider
$(document).ready(function() {
    $('.testimonials').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear',
        adaptiveHeight: true
    });
});

