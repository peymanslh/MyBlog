
<nav id="show-sidebar">
    <a href="#my-menu" id="shower" class="simptip-position-left" data-tooltip="منوی اصلی"><span class="icon-three-bars"></span></a>
</nav>

<aside id="my-menu">
   <div class="overaly"></div>
   <section class="wrapper">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar') ) : ?><?php endif; ?>
   </section>

</aside>
