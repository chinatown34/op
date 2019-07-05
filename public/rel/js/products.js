$(function () {
    if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
        $('.hint').mouseover(function () {
            $(this).children('span').show();
        }).mouseout(function () {
            $(this).children('span').hide();
        })
    }

    $(".stage_tgl").click(function (event) {
        $(this)
          .nextAll('.stage_cont').first()
          .slideToggle("slow", "linear");
        return false;
    });
    var additionalInfo = $('.stage_cont');
    $(".show").click(function (event) {
        additionalInfo.slideDown("slow", "linear"); return false;
    });
    $(".hide").click(function (event) {
        additionalInfo.slideUp("slow", "linear"); return false;
    });

    $('.product_menu ul li, .product_pages ul li').each(function () {
        var li = $(this);
        if (li.children('div').children().is('span')) {
            li.children('div').addClass('active');
        }
    });

    $('.product_pages ul li').first().children('div').addClass('first');

    /* Initialize SlidesJS */
    $("#slides").slides({
        width: 550,
        height: 400,
        navigateStart: function () {
            $('.slides .slidesContainer').css('overflow', 'hidden');
        },
        navigateEnd: function (current) {
            $('.slides .slidesContainer').css('overflow', 'visible');
            currentSlide(current);
        },
        loaded: function () {
            currentSlide(1);
            
        },
        playInterval: 10000,
        pauseInterval: 1000
    });
    $('.slides .slidesContainer').css('overflow', 'visible');
    //$("#slides").slides("play");

    jQuery.extend(jQuery.easing, {
        easeOutBounce: function (x, t, b, c, d) {
            if ((t /= d) < (1 / 2.75)) {
                return c * (7.5625 * t * t) + b;
            } else if (t < (2 / 2.75)) {
                return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
            } else if (t < (2.5 / 2.75)) {
                return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
            } else {
                return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
            }
        }
    });
});

function currentSlide(current) {
    $(".current_slide").text(current + " of " + $("#slides").slides("status", "total"));
}
