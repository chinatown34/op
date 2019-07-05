$(function () {
    if ($('.form-block').length > 0) {
        var form_top = $(".left").offset().top - 20;
        var news_page = $(".news.inner_page").length;

        $(window).scroll(function () {
            if ($(".product_content").height() > $('.form-block').height() + 150 || $(".product_content").length == 0) {
                max_scroll = $('.left').height() - $('.form-block').height() + form_top;
                if (news_page > 0) {
                    max_scroll -= 35;
                }

                if ($('.form-block').hasClass('inner-page')) {
                    min_scroll = form_top;
                    x = form_top - 20;
                } else {
                    min_scroll = form_top;
                    x = 46;
                }

                if ($(window).scrollTop() <= min_scroll) {
                    $('.form-block').removeClass('fix absolute');
                }
                if ($(window).scrollTop() > min_scroll && $(window).scrollTop() < max_scroll) {
                    $('.form-block').addClass('fix');
                    $('.form-block').removeClass('absolute');
                    $('.form-block').attr('style', '');
                }
                if ($(window).scrollTop() > max_scroll) {
                    $('.form-block').removeClass('fix');
                    $('.form-block').addClass('absolute');
                    $('.form-block').css('top', max_scroll - x);
                }
            }

            if ($(".product_content").height() > $('.form_block').height() + 150 || $(".product_content").length == 0) {
                max_scroll = $('.left').height() - $('.form_block').height() + form_top;

                min_scroll = form_top;
                x = form_top - 20;

                if ($(window).scrollTop() <= min_scroll) {
                    $('.form_block').removeClass('fix absolute');
                }
                if ($(window).scrollTop() > min_scroll && $(window).scrollTop() < max_scroll) {
                    $('.form_block').addClass('fix');
                    $('.form_block').removeClass('absolute');
                    $('.form_block').attr('style', '');
                }
                if ($(window).scrollTop() > max_scroll) {
                    $('.form_block').removeClass('fix');
                    $('.form_block').addClass('absolute');
                    $('.form_block').css('top', max_scroll - x);
                }
            }
        });
    }

    $('.main-tab').click(function () {
        $('.main-tab').removeClass('active');
        $(this).addClass('active');
        tab_ch = $(this).index();
        $('.main-page').removeClass('active');
        $('.main-page').eq(tab_ch).addClass('active');
        $('.main-materials').hide();
        $('.main-materials').eq(tab_ch).show();
    })
});
