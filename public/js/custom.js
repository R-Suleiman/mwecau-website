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

$(document).ready(function () {
    // Get night mode state from LocalStorage
    var nightModeState = localStorage.getItem("nightMode");

    // Set default mode
    if (nightModeState === "enabled") {
        $("body").addClass("night-mode");
    }

    // Toggle night mode and store state
    $("#nightModeToggle").on("click", function () {
        $("body").toggleClass("night-mode");
        var nightModeState = $("body").hasClass("night-mode")
            ? "enabled"
            : "disabled";
        localStorage.setItem("nightMode", nightModeState);
    });

    // Apply night mode on page load
    if (nightModeState === "enabled") {
        $("body").addClass("night-mode");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});

// const eventsBtn = document.querySelector('.btn-events')
// const staffBtn = document.querySelector('.btn-staff')
// const progBtn = document.querySelector('.btn-prog')
// const eventsTable = document.querySelector('.events-table')
// const staffTable = document.querySelector('.staff-table')
// const progTable = document.querySelector('.prog-table')
// const backgColor = 'rgb(248, 162, 248)'
