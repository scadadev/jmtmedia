(function($){
    var btn = $('#to-top');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $( document ).ajaxComplete(function( event, xhr, settings ) {
        // reload after add review
        console.log(xhr);
        if( settings.data && settings.data.indexOf('action=review_form') !== -1 ){
            window.location.reload();
        }
    });

})(jQuery);