$(document).ready(function () {
    function o() {
        wh = $(window).height(), $("#my-menu .wrapper").css({height: wh + "px"})
    }

    var n = !1;
    $("#shower, #my-menu .overaly").click(function (o) {
        var i = $(window).scrollTop(), e = $(window).scrollLeft();
        n ? ($("body").css("overflow", "auto"), $("#shower").css({
            right: "0px",
            color: "#fff",
            backgroundColor: "#000"
        }), $("#my-menu .wrapper").css({
            animationDuration: "0.3s",
            animationFillMode: "both",
            animationName: "fadeInRight"
        }), $(window).unbind("scroll")) : ($("body").css("overflow", "hidden"), $("#shower").css({
            right: "350px",
            color: "#000",
            backgroundColor: "#fff"
        }), $("#my-menu .wrapper").css({
            animationDuration: "0.3s",
            animationFillMode: "both",
            animationName: "fadeInRight"
        }), $(window).scroll(function () {
            $(this).scrollTop(i).scrollLeft(e)
        })), $("#my-menu").css({
            top: i,
            left: e
        }).css({display: n ? "none" : "block"}, "none"), n = !n, o.preventDefault()
    }), o(), window.onresize = function (n) {
        o()
    }
});