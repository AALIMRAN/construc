(function($) {
    'use strict';
    $('.archive-date a').on('click', function(e) {
        e.preventDefault();
        var term_ID = $(this).text();
        $(this).addClass('active').siblings().removeClass('active');

        $.ajax({
            type: 'post',
            url: ajaxtest.ajaxtest_ajax_url,
            data: {
                action: 'get_archive_post',
                // asr_ajax_nonce: ajaxtest.ajaxtest_ajax_nonce,
                term_ID: term_ID,
            },
            success: function(data) {
                $('.ajaxpost').fadeOut(300, function() {
                    $(this).html(data).fadeIn(300);
                });
            },
            error: function(data) {
                console.log(data);
            },
        });
    });

    $('.category li').on('click', function(e) {
        e.preventDefault();
        var term_ID = $(this).attr('data_id');
        $(this).addClass('active').siblings().removeClass('active');
        $.ajax({
            type: 'post',
            url: ajaxtest.ajaxtest_ajax_url,
            data: {
                action: 'get_category_post',
                // asr_ajax_nonce: ajaxtest.ajaxtest_ajax_nonce,
                term_ID: term_ID,
            },
            success: function(data) {
                $('.ajaxpost').fadeOut(300, function() {
                    $(this).html(data).fadeIn(300);
                });
            },
            error: function(data) {
                console.log(data);
            },
        });
    });
})(jQuery);



