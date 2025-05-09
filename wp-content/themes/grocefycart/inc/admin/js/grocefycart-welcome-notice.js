(function ($) {
  "use strict";
  $("#install-activate-button").on("click", function (e) {
    e.preventDefault();
    var button = $(this);
    button.attr("disabled", "disabled");
    button.text("Installing & Activating required plugins").addClass("processing-spinner");

    var activationData = {
      action: "grocefycart_install_and_activate_plugins",
      nonce: grocefycart_localize.nonce,
    };
    $.post(grocefycart_localize.ajax_url, activationData, function (response) {
      var checkJSON = /{.*}/; // Regular expression to match the JSON portion
      var match = checkJSON.exec(response);
      if (match) {
        var jsonResponse = match[0]; // Extracted JSON portion
        try {
          var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

          if (responseObj.success === true) {
            window.location.href = grocefycart_localize.redirect_url;
          } else {
            console.log("Error!");
          }
        } catch (error) {
          console.log("Error parsing JSON!");
        }
      } else {
        //alert(response);
        if (response.success === true) {
          window.location.href = grocefycart_localize.redirect_url;
        } else {
          button.text(response.data.message);
        }
      }
    });
  });
  $("#grocefycart-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: "grocefycart_dismissble_notice",
      },
    });
  });
})(jQuery);
