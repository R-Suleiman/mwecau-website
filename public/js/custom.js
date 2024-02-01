// Javascript for Toggle Night Mode
$(document).ready(function() {
    // last  LocalStorage
    var nightModeState = localStorage.getItem("nightMode");
  
    // setting default mode
    if (nightModeState === "enabled") {
      $("body").addClass("night-mode");
    }
  
    $("#nightModeToggle").on("click", function() {
      // Toggle night mode
      $("body").toggleClass("night-mode");
  
      // storing current mode LocalStorage
      var nightModeState = $("body").hasClass("night-mode") ? "enabled" : "disabled";
      localStorage.setItem("nightMode", nightModeState);
    });
  });
  
   document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
      });
  