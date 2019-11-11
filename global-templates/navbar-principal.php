    <header class="header-mgi page-principal__header fixed-top">
        <nav class="navbar navbar-expand-xl navbar-light bg-light navbar-sticky sps sps--abv" id="navbarMGI">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php the_field('logo_principal', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMetro"
                    aria-controls="navbarMetro" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMetro">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'navbar-principal',
                            'container'       => false,
                            'menu_class'          => '',
                            'fallback_cb'         => '__return_false',
                            'items_wrap'          => '<ul id="%1$s" class="navbar-nav ml-auto %2$s">%3$s</ul>',
                            'depth'               => 2,
                            'walker'            => new metropwp_walker_nav_menu()
                        ));
                    ?>
                </div>
            </div>
        </nav>
    </header>