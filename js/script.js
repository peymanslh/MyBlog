

$( document ).ready(function() {
        $('.my-att a').attr({
            'data-lightbox': 'mygallery',
        });

        lightbox.option({
          'resizeDuration': 100,
          'fadeDuration': 100
        });



        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#btn-search').bind('click', function(e) {

                // Prevents the default action to be triggered.
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#box-search').bPopup();

            });

            // $('html').offcanvas({
            // hasSidebarLeft: false,
            // hasSidebarRight: true
            // });

        });


        // $("#my-menu").mmenu({
        //      autoHeight: true,
        //      extensions: ["effect-fade-menu"],
        //      extensions: ["pageshadow"]
        //   }, {
        //      // configuration
        //      offCanvas: {
        //         pageNodetype: "div",
        //         position: "right",
        //         // zposition: "front"
        //      }
        // });
      
      //hide the menu
      // $('#my-menu').hide();

      // show when click on button
      // $('#hamburger').click(function(e) {
      //   $('#my-menu').show();
      //   $('body').css('overflow', 'hidden');
      //   $('#my-menu .wrapper').css();
      //   e.preventDefault();
      // });

      // $('.overaly').click(function(e) {
      //   $('#my-menu').hide();
      //   $('body').css('overflow', 'auto');
      //   e.preventDefault();
      // });

      // menuHeight();

      // window.onresize = function (e) {
      //   menuHeight();
      // }

      // function menuHeight() {
      //   wh = $(window).height();
      //   $('#my-menu').css({'height': wh + 'px' });
      //   $('#my-menu .overaly').css({'height': wh + 'px' });
      //   $('#my-menu .wrapper').css({'height': wh + 'px' });
      // }



    });

// jQuery(document).ready(function($) {
//     $('html').offcanvas({
//         hasSidebarLeft: false,
//         hasSidebarRight: true
//     });
// });


