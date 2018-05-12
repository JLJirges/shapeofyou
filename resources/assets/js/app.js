/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current_tab');
        $('.tab-content').removeClass('current_tab');

        $(this).addClass('current_tab');
        $("#"+tab_id).addClass('current_tab');
    })

});

$(document).ready(function(){
    $(".whole_old_entry_trigger").click(function(){
        $(".whole_old_entry").toggle();
    });
});