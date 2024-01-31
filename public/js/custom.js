// Javascript kwa Toggle ya Night Mode
$(document).ready(function() {
    // Angalia hali ya mwisho katika LocalStorage
    var nightModeState = localStorage.getItem("nightMode");
  
    // Weka hali ya mwisho, au default kama hakuna
    if (nightModeState === "enabled") {
      $("body").addClass("night-mode");
    }
  
    $("#nightModeToggle").on("click", function() {
      // Toggle night mode
      $("body").toggleClass("night-mode");
  
      // Hifadhi hali mpya katika LocalStorage
      var nightModeState = $("body").hasClass("night-mode") ? "enabled" : "disabled";
      localStorage.setItem("nightMode", nightModeState);
    });
  });
   document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
      });
  