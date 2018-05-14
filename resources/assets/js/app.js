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
        $("#responsive_nav").slideToggle("slow");
    });
});


(function($, undefined){
    $(document).ready(function(){

        $('.slide_box').width($('.page').width());
        $('.slide_list').width($('.page').width() * ($('.page').length));

        $('.next').on('click', function(){
            $('.slide_list').animate({
                left: $('.page').width() * (-1)
            }, function(){
                $('.page').last().after($('.page').first());
                $('.slide_list').css('left', 0);
            });
        });

        $('.prev').on('click', function(){
            $('.page').first().before($('.page').last());
            $('.slide_list').css('left', $('.page').width() * (-1));
            $('.slide_list').animate({
                left: 0
            });
        });

    });
})(jQuery);