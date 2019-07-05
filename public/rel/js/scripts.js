$(document).ready(function () {
    Cufon.replace('.cufon_ttl');

    $('.zoom').click(function () {
        shadow('.popupImg', 'remove');
        var src = $(this).attr('href');
        $("body").append('<div class="popupImg"><a class="pclose"></a><img src="' + src + '"></div>');

        $('.pclose').click(function () {
            $('.popupImg').remove();
            $('.shadow').remove();
        });

        $('.popupImg img').load(function () {
            $('.popupImg').css('display', 'block');
            var img = $(this);
            var y = 100;
            var x = ($(window).width() / 2) - (img.width() / 2);
            $('.popupImg').css({ 'top': y, 'left': x });
            $(window).scrollTop(0);
        });

        return false;
    });

    $('.searchInput').each(function () {
        var elem = $(this);
        if (elem.val() == '') {
            var title = elem.attr('title');
            elem.val(title);
            elem.css('color', '#999999');
        }
    });
    $('.searchInput').focus(function () {
        var elem = $(this);
        var title = elem.attr('title');
        if (elem.val() == title) {
            elem.val('');
            elem.css('color', '');
        }
    });
    $('.searchInput').blur(function () {
        var elem = $(this);
        if (elem.val() == '') {
            var title = elem.attr('title');
            elem.val(title);
            elem.css('color', '#999999');
        }
    });

    function shadow(elem, action) {
        $("body").append('<div class="shadow"></div>');
        $('.shadow').height($(document).height());
        $('.shadow').click(function () {
            $(this).remove();
            if (action == 'remove') {
                $(elem).remove();
            }
            else if (action == 'hide') {
                $(elem).css('display', 'none');
            }
        });
    }

    if (($.browser.version != '6.0') && (window.location.pathname != '/') && (window.location.pathname != '/aboutus/clients/')) {
        var l = $('#main')[0].getBoundingClientRect().left;
        $.ProdMenuTopHeight = 225;
        $.MinTopOffsetForProdMenu = 152;
        var elem = $('.slideTop');
        var pbElem = $('#prodblock');
        var dheight = $(document).height();
        if (dheight > 900) {
            SetProdblockPosition();
        }

        if ($.browser.msie && ($.browser.version == 7)) {
            pbElem.css('left', l + 758);
        } else {
            pbElem.css('left', l + 760);
        }

        $(window).scroll(function () {
            var l = $('#main')[0].getBoundingClientRect().left;
            var t = $(window).scrollTop();
            var btTtrack = dheight - (274 + t);

            elem.css('left', l);

            if (t > 450) {
                elem.show('fast');
            }
            else {
                elem.hide('fast');
            }

            if (dheight > 900) {
                if (t > $.MinTopOffsetForProdMenu) {
                    pbElem.css('top', 10);
                    if (btTtrack <= 450) {
                        pbElem.fadeOut('fast');
                    }
                    else {
                        pbElem.fadeIn('fast');
                    }
                }
                else {
                    pbElem.css('top', $.ProdMenuTopHeight - t);
                }

            }
        });

        $(window).resize(function () {
            var l = $('#main')[0].getBoundingClientRect().left;
            if ($.browser.msie && ($.browser.version == 7)) {
                pbElem.css('left', l + 758);
            } else {
                pbElem.css('left', l + 760);
            }
            elem.css('left', l);
        });
    }

    // проверка ОС
    if (navigator.userAgent.indexOf('Mac') != -1) {
        $('body').addClass('mac_os');
    }
});

// Меню продуктов в старом дизайне
function SetProdblockPosition() {
    var pbElem = $('#prodblock');
        pbElem.css({ 'position': 'fixed', 'top': $.ProdMenuTopHeight + 'px', 'margin': 0 });
}

function fixEvent(e) {
    // получить объект событие для IE
    e = e || window.event

    // добавить pageX/pageY для IE
    if (e.pageX == null && e.clientX != null) {
        var html = document.documentElement
        var body = document.body
        e.pageX = e.clientX + (html && html.scrollLeft || body && body.scrollLeft || 0) - (html.clientLeft || 0)
        e.pageY = e.clientY + (html && html.scrollTop || body && body.scrollTop || 0) - (html.clientTop || 0)
    }

    return e
}

function mouseMove(event) {
    event = fixEvent(event)
    var x = event.pageX - grlLeft;
    var layerX = -1100 + x;

    document.getElementById('light').style.left = layerX + "px";
   }

function setCookie(name, value, expires, path, domain, secure) {
    var today = new Date();
    today.setTime(today.getTime());

    if (expires) {
        expires = expires * 1000 * 60 * 60 * 24;
    }

    var expires_date = new Date(today.getTime() + (expires));
    document.cookie = name + "=" + escape(value) +
        ((expires) ? ";expires=" + expires_date.toGMTString() : "") +
        ((path) ? ";path=" + path : "") +
        ((domain) ? ";domain=" + domain : "") +
        ((secure) ? ";secure" : "");
   }

function getCookie(name) {
    var start = document.cookie.indexOf(name + "=");
    var len = start + name.length + 1;
    
    if ((!start) &&	(name != document.cookie.substring(0, name.length))) {
        return null; 
    }

    if (start == -1) {
        return null; 
    }

    var end = document.cookie.indexOf(";", len);
    if (end == -1) end = document.cookie.length;

    return unescape(document.cookie.substring(len, end));
}

function validateSearchQuery(source, arguments) {
    if (arguments.Value == "поиск по сайту") {
        arguments.IsValid = false;
    }
    else {
        arguments.IsValid = true;
    }
}

function ScrollTo(elementId) {
    $('html, body').animate({
        scrollTop: parseInt($(elementId).offset().top)
    }, 0);
}