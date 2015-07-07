

$( document ).ready(function() {
    $(function() {

        // Binding a click event
        // From jQuery v.1.7.0 use .on() instead of .bind()
        $('#btn-search').bind('click', function(e) {

            // Prevents the default action to be triggered.
            e.preventDefault();

            // Triggering bPopup when click event is fired
            $('#box-search').bPopup();

        });

$('html').offcanvas({
        hasSidebarLeft: false,
        hasSidebarRight: true
    });

    });
});

// jQuery(document).ready(function($) {
//     $('html').offcanvas({
//         hasSidebarLeft: false,
//         hasSidebarRight: true
//     });
// });


$(document).ready(function() {
      $("#my-menu").mmenu({
         autoHeight: true,
         extensions: ["effect-fade-menu"],
         extensions: ["pageshadow"]
      }, {
         // configuration
         offCanvas: {
            pageNodetype: "div",
            position: "right",
            // zposition: "front"
         }
      });
   });



   