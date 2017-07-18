<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php bloginfo('name'); ?></title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/styles.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link  type="text/css" rel="stylesheet" media="screen,projection" href="<?php bloginfo('template_url');?>/css/billeterie.css">
    <link  type="text/css" rel="stylesheet" media="screen,projection" href="<?php bloginfo('template_url');?>/css/map.css">
    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        // echo $image[0];
    ?>
    <style>
        .brand-logo {
            background-image: url(<?php echo esc_url($image[0]); ?>);
        }
    </style>
</head>

<body>
    <!--Search-->
    <nav class="">
        <div class="search-bar nav-wrapper lighten-1 container">
            <?php get_search_form(); ?>
        </div>
    </nav>

    <!--NAV-->
    <nav class="white nav-princip fixed" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php echo home_url(); ?>" class="brand-logo">
                <h1 class="brand"><?php bloginfo('name'); ?>/<em><?php bloginfo('description'); ?></em></h1>
            </a>
            <ul class="right hide-on-med-and-down">
                <?php wp_nav_menu(array(
                    'container'         =>  '',
                    'theme_location'    =>  'main_nav',
                    'fallback_cb'       =>  false
                )); ?>
            </ul>
        <!--NAV mobile-->
            <ul id="nav-mobile" class="side-nav">
                    <?php wp_nav_menu(array(
                        'container'         =>  '',
                        'theme_location'    =>  'mobile_nav',
                        'fallback_cb'       =>  false
                    )); ?>
            </ul><a href="<?php bloginfo('url'); ?>" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a></div>
    </nav>