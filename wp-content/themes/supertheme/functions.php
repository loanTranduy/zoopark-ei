<?php
    // LOGO
    add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

    /*** Déclaration des menus *****/
    register_nav_menu('main_nav','Navigation principale');
    register_nav_menu('mobile_nav','Navigation responsive');   
    ?>