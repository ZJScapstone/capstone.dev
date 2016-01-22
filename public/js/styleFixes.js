$(document).ready(function(){
    var navbarHeight = $('nav').height();

    setTimeout( function(){
        $('body').css('padding-bottom', (navbarHeight * 2) + 'px')
    }, 400);

    $('.modal-trigger').click(function(){
        $modal = $($(this).attr('href'));
        setTimeout( function(){
            $modal.css({
                "transition": "all 0.3s",
                "top": "5%"
            });
        }, 400);
    });

    $(window).resize(function(){
        $('body').css('padding-bottom', (navbarHeight * 2) + 'px');
        $('.modal-trigger').click(function(){
            $modal = $($(this).attr('href'));
            setTimeout( function(){
                $modal.css({
                    "transition": "all 0.3s",
                    "top": "5%"
                });
            }, 400);
        });
    });
});
