document.addEventListener("DOMContentLoaded", function () {
    // Navbar toggler
    $(document).ready(function () {
        $(".navbar-toggler").click(function () {
            $(".navbar-collapse").toggleClass("collapsing");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});


