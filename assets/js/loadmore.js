jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
    $('.posts_loadmore').click(function(e){

        e.preventDefault();

        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
                'is-product' : jQuery('.posts_loadmore').data('prod'),
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-news-grid .grid').append(data);
                    misha_loadmore_params.current_page++;
                   // console.log(jQuery('.misha_loadmore').data,'maxpage');
                  //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.posts_loadmore').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


    $('.load-more-games').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_games',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-games-grid .games-grid').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-games').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


    $('.load-more-pages').click(function(e){

        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_pages',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_pageap,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-pages-grid .grid').append(data);
                    misha_loadmore_params.current_pageap++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_pageap == jQuery('.load-more-pages').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


    $('.load-more-news').click(function(e){
        console.log('LM news');
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_news',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.author-news-grid .grid').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-news').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


    $('.load-more-products').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_products',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-main-items-grid .items-grid').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-products').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });

    $('.load-more-products-author').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_products_author',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-main-items-grid .items-grid').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-products-author').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


    $('.load-more-reviews').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_reviews',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.reviews-list').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-reviews').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
                jQuery('.reviews-list').isotope('reloadItems').isotope();
            }
        });
    });

    $('.load-more-games-other').click(function(e){
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_games_other',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page,
                'postid' : misha_loadmore_params.postid,
            };

        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text(misha_loadmore_params.loading); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( misha_loadmore_params.loadmore ); // insert new posts
                    jQuery('.aff-games-grid .games-grid').append(data);
                    misha_loadmore_params.current_page++;
                    // console.log(jQuery('.misha_loadmore').data,'maxpage');
                    //  console.log(misha_loadmore_params.current_page,'current_page');


                    if ( misha_loadmore_params.current_page == jQuery('.load-more-games-other').data('max') )
                        button.parents('.load-more').remove(); // if last page, remove the button

                } else {
                    button.parents('.load-more').remove(); // if no data, remove the button as well

                }
            }
        });
    });


});