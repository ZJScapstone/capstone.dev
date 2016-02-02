$(document).ready(function(){
    var navbarHeight = $('nav').height();
    var $iconMenu = $('#icon-menu');
    var iconMenuOffset = $('#main').offset().top;
    var menuFadeInt = 0;

    setTimeout( function(){
        $('body').css('padding-bottom', '750px');
    }, 400);

    $('.modal-trigger').click(function(){
        var $modal = $($(this).attr('href'));
        setTimeout( function(){
            $modal.css({
                "transition": "all 0.3s",
                "top": "5%"
            });
        }, 400);
    });

    $(window).resize(function(){
        iconMenuOffset = $('#icon-menu').offset().top;
        $('body').css('padding-bottom', '750px');
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

    $(window).scroll(function(){
        var position = $(window).scrollTop();
        if (position > 200) {
            $iconMenu.fadeIn();
        } else {
            $iconMenu.fadeOut();
        }
    });

    // icon menu show, hide
    $iconMenu.children().last().hide();
    $iconMenu.hover(function(){
        $(this).children().last().fadeIn(500);
        clearInterval(menuFadeInt);
    }, function(){
        var self = this;
        menuFadeInt = setTimeout( function(){
            $(self).children().last().fadeOut(1000);
        }, 1000);
    });
});
