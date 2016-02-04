$(document).ready(function () {
    var floater = false;
    $('#shower, #my-menu .overaly, #btnClose').click(function (e) {
        var top = $(window).scrollTop();
        var left = $(window).scrollLeft()
        if (!floater) {
            $('body').css('overflow', 'hidden');
            $('#shower').css({'right': '350px', 'color': '#000', 'backgroundColor': '#fff'});
            $('#my-menu .wrapper').css({
                'animationDuration': '0.3s',
                'animationFillMode': 'both',
                'animationName': 'fadeInRight'
            });
            $(window).scroll(function () {
                $(this).scrollTop(top).scrollLeft(left);
            });
        } else {
            $('body').css('overflow', 'auto');
            $('#shower').css({'right': '0px', 'color': '#fff', 'backgroundColor': '#000'});
            $('#my-menu .wrapper').css({
                'animationDuration': '0.3s',
                'animationFillMode': 'both',
                'animationName': 'fadeInRight'
            });
            $(window).unbind('scroll');
        }

        $('#my-menu').css({top: top, left: left}).css({
            'display': (floater ? 'none' : 'block')
        }, 'none');
        floater = !floater;
        e.preventDefault();
    });


    // Set wrapper height
    menuHeight();
    window.onresize = function (e) {
        menuHeight();
    }
    function menuHeight() {
        wh = $(window).height();
        $('#my-menu .wrapper').css({'height': wh + 'px'});
    }
});
