$(function () {
    "use strict";

    $('.subscribe-form').on("submit", function (event) {
        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            email = $.trim($form.find('input[name="email"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {"email": email});

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4 class="subscribe-title" style="margin-bottom: 25px; line-height: 56px;">Thank you for subscription!</h4>').fadeTo(300, 1);
        });

    });

});

