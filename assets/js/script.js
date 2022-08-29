(function ($) {
  //=============================
  // Sticky Start
  //=============================
  var wind = $(window);
  wind.on("scroll", function () {
    var bodyScroll = wind.scrollTop(),
      sticky = $(".header-part"),
      logo = $(".sticky .logo> img");
    if (bodyScroll > 150) {
      sticky.addClass("header-sticky");
    } else {
      sticky.removeClass("header-sticky");
    }
  });

  //=============================
  // Scroll Next Start
  //=============================

  // var secWind = $(window);

  // $(".right-scroll-bar").click(function () {
  //   secWind.on("scroll", function () {
  //     var bodyScroll = secWind.scrollTop();
  //     if (bodyScroll > 150) {
  //       sticky.addClass("header-sticky");
  //       $(".features__block-sec");
  //     } else {
  //       sticky.removeClass("header-sticky");
  //     }
  //   });
  // });

  //=============================
  // Navigation Start
  //=============================
  $(".toggler-button").click(function () {
    console.log("menu bar click...");
    $(this).toggleClass("on");
    $("#overlay").toggleClass("open");
    $("body").toggleClass("body-overlay");
  });

  $(".close-btn").click(function () {
    $("#overlay").toggleClass("open");
    $("body").removeClass("body-overlay");
  });

  // $(document).on("click", function (e) {
  //   var canvasMenu = $("#overlay");

  //   if (
  //     !$(".toggler-btn span ").is(e.target) && // if the target of the click isn't a link ...
  //     !canvasMenu.is(e.target) && // ... or the canvasMenu ...
  //     canvasMenu.has(e.target).length === 0
  //   ) {
  //     // ... or a descendant of the canvasMenu
  //     canvasMenu.removeClass("open");
  //     $("body").removeClass("body-overlay");
  //     console.log(canvasMenu);
  //   }
  // });

  // ======================
  // DROPDOWN MENU
  // ======================

  $(".sub-menu ul").hide();
  $(".sub-menu a").click(function () {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });

  //======================
  // NICE SELECT
  //======================

  if ($("select").length > 0) {
    $("select").niceSelect();
  }

  //======================
  // COUNTER
  //======================
  if ($(".counter").length > 0) {
    $(".counter").counterUp();
  }

  //=============================
  // Product Slide Carousel
  //=============================

  if ($(".product__caro").length > 0) {
    $(".product__caro").owlCarousel({
      autoplay: false,
      dots: false,
      loop: true,
      center: true,
      margin: 30,
      nav: false,
      navText: [
        '<i class="fa-solid fa-arrow-left"></i>',
        '<i class="fa-solid fa-arrow-right"></i>',
      ],
      responsiveBaseElement: "body",
      responsive: {
        0: {
          items: 1,
        },
        767: {
          items: 2,
        },
        992: {
          items: 2,
        },
      },
    });
  }

  //=============================
  // Gallery Slide Carousel
  //=============================

  if ($(".testimonial").length > 0) {
    $(".testimonial").owlCarousel({
      autoplay: false,
      dots: false,
      loop: true,
      center: false,
      margin: 30,
      nav: false,
      navText: [
        '<i class="fa-solid fa-arrow-left"></i>',
        '<i class="fa-solid fa-arrow-right"></i>',
      ],
      responsiveBaseElement: "body",
      responsive: {
        0: {
          items: 1,
        },
        767: {
          items: 1,
        },
        992: {
          items: 1,
        },
      },
    });
  }

  //======================
  // GOOGLE MAP SCRIPT
  //======================
  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,
      scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: true,

      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(40.67, -73.94), // New York
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById("map");

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
  }
  if ($("#map").length > 0) {
    google.maps.event.addDomListener(window, "load", init);
  }
})(jQuery);
