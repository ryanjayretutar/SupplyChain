$(document).ready(function(){
  $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
          .parent()
          .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
});



});

$(function () {
    
        // Mobiscroll Calendar initialization
        $('.demo-mobile').mobiscroll().calendar({
            display: 'bubble'   // Specify display mode like: display: 'bottom' or omit setting to use default
        });
    
        // Mobiscroll Calendar initialization
        $('.demo-desktop').mobiscroll().calendar({
            display: 'bubble',  // Specify display mode like: display: 'bottom' or omit setting to use default
            touchUi: false      // More info about touchUi: https://docs.mobiscroll.com/4-5-2/calendar#opt-touchUi
        });
    
    });