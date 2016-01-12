(function ($) { // Begin jQuery
$(function () { // DOM ready
    // Toggle open and close nav styles on click
    $('#hamburger').click(function () {

        $('#mobile-nav').addClass('.appear').slideToggle();
        return false;
    });


}); // end DOM ready
})(jQuery); // end jQuery