<nav id="show-sidebar">
    <a href="#my-menu" id="shower" class="simptip-position-left" data-tooltip="منوی اصلی"><span
            class="icon-three-bars"></span></a>
</nav>

<aside id="my-menu">
    <div class="overaly">
        <section class="wrapper" style="z-index: 99999">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </section>
    </div>


</aside>
