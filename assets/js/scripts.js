(function($){
    var btn = $('#to-top');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 800) {
            btn.addClass('show');
            topBtnPosition();
        } else {
            btn.removeClass('show');
        }
    });

    function topBtnPosition() {
        let height = 60;
        let aff_bottom_cta = $('.aff-bottom-cta');
        if( aff_bottom_cta.length && aff_bottom_cta.hasClass('is-visible') ) {
            height = aff_bottom_cta.height() + 40;
        }
        btn.css({bottom: height});
    }

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $( document ).ajaxComplete(function( event, xhr, settings ) {
        // reload after add review
        if( settings.data && settings.data.indexOf('action=review_form') !== -1 ){
            window.location.reload();
        }
    });

    $('.aff-bottom-close').on('click', function(){
        $('.aff-bottom-cta').remove();
    });

    $(window).on('resize', function(){
        topBtnPosition();
    });

    $(document).on('click', function(){
        topBtnPosition();
    });

    // compare gallery
    new SimpleLightbox('a.compare-gallery');

})(jQuery);