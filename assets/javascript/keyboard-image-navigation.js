!function (n) {
    n(document).on("keydown.twentyfifteen", function (t) {
        var e = !1;
        37 === t.which ? e = n(".nav-previous a").attr("href") : 39 === t.which && (e = n(".nav-next a").attr("href")), e && !n("textarea, input").is(":focus") && (window.location = e)
    })
}(jQuery);