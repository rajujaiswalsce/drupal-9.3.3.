(function ($) {
    Drupal.behaviors.custom_form = {
      attach: function (context, settings) {
        alert('Hello from script.js!');
      }
    };
  })(jQuery);