<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
     <?php
     /* Primary navigation */
       wp_nav_menu( array(
               'menu'              => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'navbar-collapse collapse',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
</nav>
