(function ($) { // Begin jQuery
$(function () { // DOM ready
    
    
    // MOBILE NAVIGATION
    $('#hamburger').click(function () {

        $('#mobile-nav').addClass('.appear').slideToggle();
        return false;
    });
    
    //Honeypot
    $('form').submit(function(){    
        if ($('input#honeypot').val().length != 0) {
            return false;
        } 
    });


}); // end DOM ready
})(jQuery); // end jQuery