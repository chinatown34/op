/*Parallax*/
$('body').parallax({
    'elements': [
      {
          'selector': 'body.parallax-enabled',
          'properties': {
              'x': {
                  'background-position-x': {
                      'initial': 135,
                      'multiplier': 0.005,
                      'invert': true
                  }
              },
              'y': {
                  'background-position-y': {
                      'initial': 2.5,
                      'multiplier': 0,
                      'unit': '%'
                  }
              }
          }
      },
      {
          'selector': 'div.parallax.outer.parallax-enabled',
          'properties': {
              'x': {
                  'background-position-x': {
                      'initial': 30,
                      'multiplier': 0.001,
                      'unit': '%',
                      'invert': true
                  }
              },
              'y': {
                  'background-position-y': {
                      'initial': 3.5,
                      'multiplier': 0,
                      'unit': '%'
                  }
              }

          }
      },
      {
          'selector': 'div.parallax.inner.parallax-enabled',
          'properties': {
              'x': {
                  'background-position-x': {
                      'initial': 0,
                      'multiplier': 0.005
                  }
              },
              'y': {
                  'background-position-y': {
                      'initial': 4.5,
                      'multiplier': 0,
                      'unit': '%'
                  }
              }
          }
      }
    ]
});

function currentSlide(current) {
    $(".current_slide").text(current + " of " + $("#slides").slides("status", "total"));
}

$(function () {
    /* Initialize SlidesJS */
    $("#slides").slides({
        width: 535,
        height: 200,
        navigateEnd: function (current) {
            currentSlide(current);
        },
        loaded: function () {
            currentSlide(1);
        },
        playInterval: 10000,
        pauseInterval: 1000
    });


    $("#slides").slides("stop");

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


    /* dropdown product description */
    var effect = 'easeOutBounce';
    var speed = 1000;
    var show_more = $(".product_block .more a");
    $('.product_menu li').hover(
      function () {
          if (show_more.hasClass('shown'))
              return;
          var low_info = $(this).children('.low_info');
          var more_info = low_info.next('.more_info');
          $('.more_info').css({ top: 220, position: 'absolute' });
          if ($.browser.msie) { $('.more_info').css({ top: 232 }); }

          low_info.parent().addClass('active');
          more_info
            .stop(true, true)
            .slideDown(speed, effect);

      },
      function () {
          if (show_more.hasClass('shown'))
              return;
          var more_info = $(this).children('.more_info');
          more_info.slideUp(speed, effect, function () {
              more_info.parent().removeClass('active')
          });
      }
    );

    show_more.click(function () {
        var is_shown = show_more.hasClass('shown');
        if (!is_shown) {
            $('.more_info').css({ top: 0, position: 'relative' });
            if ($.browser.msie && $.browser.version < 9) { $('.more_info').css({ top: -16 }); }
            $('.more_info').stop(true, true);
            $('.low_info').parent().addClass('active');
            $('.more_info').slideDown(speed, effect, function () {
                $('.low_info').parent().addClass('active');
            });
            show_more.addClass('shown').text("СВЕРНУТЬ");
        }
        else {
            $('.more_info').slideUp(speed, effect, function () {
                $('.more_info').css({ position: 'absolute' });
                $('.low_info').parent().removeClass('active');
            });
            show_more.removeClass('shown').text("ПОДРОБНО");
        }
        return false;
    });

    $('.certified a').hover(
        function () {
            var img = $(this).find('img');
            var id = img.attr('id');
            img.attr({ src: '/rel/img/wercool/' + id + '_on.gif' });
        },
        function () {
            var img = $(this).find('img');
            var id = img.attr('id');
            img.attr({ src: '/rel/img/wercool/' + id + '.gif' });
        }
    );
})
