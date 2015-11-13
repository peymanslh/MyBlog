'use strickt';

$(document).ready(function () {

    // lightbox option
    lightbox.option({
        'resizeDuration': 100,
        'fadeDuration': 100
    });

    //Search page
    $(function () {
        // Binding a click event
        // From jQuery v.1.7.0 use .on() instead of .bind()
        $('#btn-search').bind('click', function (e) {
            // Prevents the default action to be triggered.
            e.preventDefault();
            // Triggering bPopup when click event is fired
            $('#box-search').bPopup();
        });
    });

    //Active content-gallery slider
    $(".gallery-output-slide").responsiveSlides({
        speed: 1000,
        auto: true,
        nav: true
    });

});
