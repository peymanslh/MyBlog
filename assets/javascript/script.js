"use strickt";
$(document).ready(function () {
    lightbox.option({resizeDuration: 100, fadeDuration: 100}), $(function () {
        $("#btn-search").bind("click", function (e) {
            e.preventDefault(), $("#box-search").bPopup()
        })
    }), $(".gallery-output-slide").responsiveSlides({speed: 1e3, auto: !0, nav: !0})
});