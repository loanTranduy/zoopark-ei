<?php
    // LOGO
    function theme_prefix_setup() {
        
        add_theme_support( 'custom-logo', array(
            'flex-width' => true,
        ) );

    }
    add_action( 'after_setup_theme', 'theme_prefix_setup' );

    /*** Déclaration des menus *****/
    register_nav_menu('main_nav','Navigation principale');
    register_nav_menu('mobile_nav','Navigation responsive');

    // <p>
    remove_filter('the_content', 'wpautop');
    
    ?>