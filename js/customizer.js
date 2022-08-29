/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
  // Site title and description.
  wp.customize("blogname", function (value) {
    value.bind(function (to) {
      $(".site-title a").text(to);
    });
  });
  wp.customize("blogdescription", function (value) {
    value.bind(function (to) {
      $(".site-description").text(to);
    });
  });

  // Header text color.
  wp.customize("header_textcolor", function (value) {
    value.bind(function (to) {
      if ("blank" === to) {
        $(".site-title, .site-description").css({
          clip: "rect(1px, 1px, 1px, 1px)",
          position: "absolute",
        });
      } else {
        $(".site-title, .site-description").css({
          clip: "auto",
          position: "relative",
        });
        $(".site-title a, .site-description").css({
          color: to,
        });
      }
    });
  });

  // Header Call to Action

  wp.customize("call_to_action", function (value) {
    value.bind(function (to) {
      $(".header-btn a").text(to);
    });
  });
  wp.customize("call_to_action_url", function (value) {
    value.bind(function (to) {
      $(".header-btn a").attr("href", to);
    });
  });

  wp.customize("call_to_action_visibility", function (value) {
    value.bind(function (to) {
      true === to ? $(".header-btn").show() : $(".header-btn").hide();
    });
  });

  // Footer CopyRight & Experience Section

  wp.customize("copyright", function (value) {
    value.bind(function (to) {
      $(".site-info .left-item p").text(to);
    });
  });
  wp.customize("devName", function (value) {
    value.bind(function (to) {
      $(".site-info .right-item p");
    });
  });

  wp.customize("experience_visibility", function (value) {
    value.bind(function (to) {
      true === to
        ? $(".site-info .right-item ").show()
        : $(".site-info .right-item ").hide();
    });
  });
})(jQuery);
