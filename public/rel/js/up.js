
function modern_upbutton_resize(){
    var ourwidth_screen = $(window).width();
    if(ourwidth_screen >= 1007) {
        $('.modern-upbutton').css('width',(ourwidth_screen-860)/2);
        $.smallscreen = false;
    } else if (ourwidth_screen >= 955) {
        $('.modern-upbutton').addClass('its-a-mobile-modern-upbutton');
        $.smallscreen = false;
    } else {
        $.$5smallscreen = true;
        $('.modern-upbutton').hide();
    }
}
$(window).resize(function(){
    modern_upbutton_resize();
});
function modern_upbutton_click_scrollup() {
    $('.modern-upbutton').attr('data-pos',$(window).scrollTop());
    $("body,html").animate({scrollTop: 0}, 500);
    setTimeout(function(){
        $('.modern-upbutton').attr('data-scroll', 'down');
    }, 501);
    return false;
}
function modern_upbutton_click_scrolldown() {
    pos_to_scroll = $('.modern-upbutton').attr('data-pos');
    $('.modern-upbutton').attr('data-pos',0);
    $("body,html").animate({scrollTop: pos_to_scroll}, 500);
    setTimeout(function(){
        $('.modern-upbutton').attr('data-scroll', 'up');
    }, 501);
    return false;
}

$(window).scroll(function() {
    if($.smallscreen == false && window.modern_upbutton_was_killed != true) {
        if($(window).scrollTop() >= 300) {
            $('.modern-upbutton').attr('data-scroll', 'up');
            $('.modern-upbutton').fadeIn(300);
        } else if ($('.modern-upbutton').attr('data-pos') == "0") {
            if ($('.modern-upbutton').attr('data-scroll') == 'up') {
                $('.modern-upbutton').fadeOut(300);
            }
        }
    }
});
function modern_upbutton_disable(){
    var date = new Date(new Date().getTime() + 60*1000*60*24);
    document.cookie="modern_upbutton_disable_by_user=1; path=/; expires="+date.toUTCString();
    $('.modern-upbutton').addClass('modern-upbutton-was-disabled');
}
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
function modern_upbutton_check_for_disable(){
    var cookcheck = getCookie('modern_upbutton_disable_by_user');
    if (cookcheck != undefined) {
        $('.modern-upbutton').addClass('modern-upbutton-was-disabled');
        window.modern_upbutton_was_killed = true;
    }
}
$(document).ready(function(){

    modern_upbutton_check_for_disable();

    modern_upbutton_resize();

    $('.modern-upbutton').bind("click touch ontouchstart", function(e){
        if ($(e.target).closest(".modern-upbutton-disable").length) return;
        if ($(this).attr('data-scroll') == 'up') {
            modern_upbutton_click_scrollup();
        } else {
            modern_upbutton_click_scrolldown();
        }
        e.stopPropagation();
    });

    $('.modern-upbutton-disable').click(function(){
        modern_upbutton_disable();
    });
});