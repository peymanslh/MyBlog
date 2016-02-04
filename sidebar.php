<nav id="show-sidebar">
    <a href="#my-menu" id="shower" class="simptip-position-left"
       data-tooltip="<?php _e('Main menu', 'myblog'); ?>"><span
            class="icon-three-bars"></span></a>
</nav>

<aside id="my-menu">
    <div class="overaly"></div>

    <section class="wrapper" style="z-index: 99999">
          <div>
              <button type="button" id="btnClose" name="close"><span class="icon-cross"></span></button>
          </div>
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
    </section>
</aside>
