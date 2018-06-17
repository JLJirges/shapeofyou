/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {

    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current_tab');
        $('.tab-content').removeClass('current_tab');

        $(this).addClass('current_tab');
        $("#" + tab_id).addClass('current_tab');
    })

});

$(document).ready(function () {
    $(".whole_old_entry_trigger").click(function () {
        $(".whole_old_entry").toggle();
    });
});

$(document).ready(function(){
    $("#burgericon").click(function(){
        $("#responsive_nav").slideToggle("2000");
    });
});
/*
$(document).ready(function(){
    $("#event_gallery_button").click(function(){
        $("#gallery_overlay_background").fadeIn("2000");
    });
});

$(document).ready(function(){
    $("#closeicon").click(function(){
        $("#gallery_overlay_background").fadeOut("2000");
    });
});*/

$(document).ready(function(){
    $("#profileicon").click(function(){
        $("#responsive-profile-nav").slideToggle("2000");
    });
});


(function($, undefined){
    $(document).ready(function(){

        $('.slide_box_gallery').width($('.page_gallery').width());
        $('.slide_list_gallery').width($('.page_gallery').width() * ($('.page_gallery').length));

        $('.next_gallery').on('click', function(){
            $('.slide_list_gallery').animate({
                left: $('.page_gallery').width() * (-1)
            }, function(){
                $('.page_gallery').last().after($('.page_gallery').first());
                $('.slide_list_gallery').css('left', 0);
            });
        });

        $('.prev_gallery').on('click', function(){
            $('.page_gallery').first().before($('.page_gallery').last());
            $('.slide_list_gallery').css('left', $('.page_gallery').width() * (-1));
            $('.slide_list_gallery').animate({
                left: 0
            });
        });

    });
})(jQuery);

(function($, undefined){
    $(document).ready(function(){

        $('.slide_box_warmup').width($('.page_warmup').width());
        $('.slide_list_warmup').width($('.page_warmup').width() * ($('.page_warmup').length));

        $('.next_warmup').on('click', function(){
            $('.slide_list_warmup').animate({
                left: $('.page_warmup').width() * (-1)
            }, function(){
                $('.page_warmup').last().after($('.page_warmup').first());
                $('.slide_list_warmup').css('left', 0);
            });
        });

        $('.prev_warmup').on('click', function(){
            $('.page_warmup').first().before($('.page_warmup').last());
            $('.slide_list_warmup').css('left', $('.page_warmup').width() * (-1));
            $('.slide_list_warmup').animate({
                left: 0
            });
        });

    });
})(jQuery);

(function($, undefined){
    $(document).ready(function(){

        $('.slide_box_stretch').width($('.page_stretch').width());
        $('.slide_list_stretch').width($('.page_stretch').width() * ($('.page_stretch').length));

        $('.next_stretch').on('click', function(){
            $('.slide_list_stretch').animate({
                left: $('.page_stretch').width() * (-1)
            }, function(){
                $('.page_stretch').last().after($('.page_stretch').first());
                $('.slide_list_stretch').css('left', 0);
            });
        });

        $('.prev_stretch').on('click', function(){
            $('.page_stretch').first().before($('.page_stretch').last());
            $('.slide_list_stretch').css('left', $('.page_stretch').width() * (-1));
            $('.slide_list_stretch').animate({
                left: 0
            });
        });

    });
})(jQuery);

(function($, undefined){
    $(document).ready(function(){

        $('.slide_box_mainworkout').width($('.page_mainworkout').width());
        $('.slide_list_mainworkout').width($('.page_mainworkout').width() * ($('.page_mainworkout').length));

        $('.next_mainworkout').on('click', function(){
            $('.slide_list_mainworkout').animate({
                left: $('.page_mainworkout').width() * (-1)
            }, function(){
                $('.page_mainworkout').last().after($('.page_mainworkout').first());
                $('.slide_list_mainworkout').css('left', 0);
            });
        });

        $('.prev_mainworkout').on('click', function(){
            $('.page_mainworkout').first().before($('.page_mainworkout').last());
            $('.slide_list_mainworkout').css('left', $('.page_mainworkout').width() * (-1));
            $('.slide_list_mainworkout').animate({
                left: 0
            });
        });

    });
})(jQuery);

(function($, undefined){
    $(document).ready(function(){

        $('.slide_box_cooldown').width($('.page_cooldown').width());
        $('.slide_list_cooldown').width($('.page_cooldown').width() * ($('.page_cooldown').length));

        $('.next_cooldown').on('click', function(){
            $('.slide_list_cooldown').animate({
                left: $('.page_cooldown').width() * (-1)
            }, function(){
                $('.page_cooldown').last().after($('.page_cooldown').first());
                $('.slide_list_cooldown').css('left', 0);
            });
        });

        $('.prev_cooldown').on('click', function(){
            $('.page_cooldown').first().before($('.page_cooldown').last());
            $('.slide_list_cooldown').css('left', $('.page_cooldown').width() * (-1));
            $('.slide_list_cooldown').animate({
                left: 0
            });
        });

    });
})(jQuery);

/*
(function($, undefined){
    $(document).ready(function(){
            $('#increase_ticketnumber').click(function(){
                $('.tickets_sold').html(function(){
                    var $this = $(this),
                        count = $this.data('count') + ('.buy_tickets');

                    $this.data('count', count);
                    return count;
                });
            });
        });

})(jQuery);
*/

(function($, undefined){
    $(document).ready(function(){
        $('.slide_screen').SlideScreen();
});
})(jQuery);


// PROFILE WORKOUTS

// Main Workouts
(function($, undefined){
    $(document).ready(function(){

        $('#slidebox_workout_main').width($('#workout_main_content').width());
        $('#workout_main_list').width($('#workout_main_content').width() * ($('#workout_main_content').length));

        $('#workout_main_next').on('click', function(){
            $('#workout_main_list').animate({
                left: $('#workout_main_content').width() * (-1)
            }, function(){
                $('#workout_main_content').last().after($('#workout_main_content').first());
                $('#workout_main_list').css('left', 0);
            });
        });

        $('#workout_main_prev').on('click', function(){
            $('#workout_main_content').first().before($('#workout_main_content').last());
            $('#workout_main_list').css('left', $('#workout_main_content').width() * (-1));
            $('#workout_main_list').animate({
                left: 0
            });
        });

    });
})(jQuery);

