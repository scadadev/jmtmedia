jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
    $('.load-more-btn').click(function(e){
        e.preventDefault();
        var button = $(this),
            settings = $(this).data('settings'),
            data = {
                'action': 'aff_loadmore',
                'settings': settings,
                'page': button.data('page')
            };

        $.ajax({
            url : loadmore_params.ajaxurl,
            data : data,
            type : 'POST',
            beforeSend : function () {
                button.text(loadmore_params.loading);
            }
        })
            .done(function(response){
                button.text(loadmore_params.loadmore);
                $('.' + settings.section + ' .' + settings.grid).append(response.html);
                response.hide_btn ? button.hide() : button.show();
                button.attr('data-page', response.page);
            });
    });

});