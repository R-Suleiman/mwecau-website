window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    preloader.classList.add('hide');
    document.body.classList.add('loaded');
});

document.addEventListener("DOMContentLoaded", function () {
    // Navbar toggler
    $(document).ready(function () {
        $(".navbar-toggler").click(function () {
            $(".navbar-collapse").toggleClass("collapsing");
        });
    });
});

// $(document).ready(function () {
//     // Get night mode state from LocalStorage
//     var nightModeState = localStorage.getItem("nightMode");

//     // Set default mode
//     if (nightModeState === "enabled") {
//         $("body, .card").addClass("night-mode, .night-mode-icons");
//     }

//     // Toggle night mode and store state
//     $("#nightModeToggle").on("click", function () {
//         $("body, .card").toggleClass("night-mode");
//         var nightModeState = $("body").hasClass("night-mode")
//             ? "enabled"
//             : "disabled";
//         localStorage.setItem("nightMode", nightModeState);
//     });

//     // Apply night mode on page load
//     if (nightModeState === "enabled") {
//         $("body, .card").addClass("night-mode");
//     }
// });

// $(document).ready(function () {
//     // Get night mode state from LocalStorage
//     var nightModeState = localStorage.getItem("nightMode");

//     // Set default mode
//     if (nightModeState === "enabled") {
//         $("body, .darkMode").addClass("night-mode");
//         $(".fa").addClass("dark-orange"); // Add dark-orange class to Font Awesome icons
//     }

//     // Toggle night mode and store state
//     $("#nightModeToggle").on("click", function () {
//         $("body, .darkMode").toggleClass("night-mode");
//         $(".fa, .far").toggleClass("dark-orange"); // Toggle dark-orange class for Font Awesome icons
//         var nightModeState = $("body").hasClass("night-mode")
//             ? "enabled"
//             : "disabled";
//         localStorage.setItem("nightMode", nightModeState);
//     });

//     // Apply night mode on page load
//     if (nightModeState === "enabled") {
//         $("body, .darkMode").addClass("night-mode");
//         $(".fa").addClass("dark-orange"); // Add dark-orange class to Font Awesome icons
//     }
// });


document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});

// $(document).ready(function(){
//     $('.team-slider').slick({
//         slidesToShow: 3, // Number of cards to show at once
//         slidesToScroll: 1, // Number of cards to scroll at a time
//         vertical: true, // Enable vertical scrolling
//         autoplay: true, // Autoplay the slider
//         autoplaySpeed: 2000, // Autoplay speed in milliseconds
//         speed: 2000,
//         responsive: [
//             {
//                 breakpoint: 768, // Breakpoint for smaller screens
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 576, // Breakpoint for even smaller screens
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//         ]
//     });
// });


