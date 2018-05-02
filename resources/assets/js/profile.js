(function ($, undefined) {

    $document.ready(function(){
        $('.diary_comments .diary_comments_details > div').hide();
        $('.diary_comments_interaction > h5').on('click', function(){
            var idx = $(this).index();
            $(this).closest('.diary_comments').find('.profile_diary_content > div').hide().eq(idx).show();
        });
        $('.diary_comments').each(function(){
            $(this).find('.diary_comments_interaction > h5').first().trigger('click');
        });
    })

})(jQuery);