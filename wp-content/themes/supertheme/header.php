<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php bloginfo('name'); ?></title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/styles.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        // echo $image[0];
    ?>
    <style>
        .brand-logo {
            background-image: url(<?php echo esc_url($image[0]); ?>);
        }

        .linkk{
            font-size: 1.8rem;
            line-height: 110%;
            margin: 1.78rem 0 1.424rem 0;
            color: rgba(0,0,0,0.87);
        }
        .linkk:hover{
            color: #ffa726;
        }
        .card-containor{
            width: 100%;
            height: 220px;
            display: flex;
            margin-bottom: 40px;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            text-align: left;
        }
        .card-image {
        position: relative;
        width: 250px;
        height: 100%;
        overflow: hidden;
        background-color: lightgrey;

        }
        .card-image a img {
        width: 140%;
        filter: grayscale(0%);
           transition: opacity .25s ease-in-out;
        -moz-transition: opacity .25s ease-in-out;
            -webkit-transition: opacity .25s ease-in-out;
        }
                .card-image a img:hover {
        filter: grayscale(100%);
        opacity: 0.5;
        }

        .right-content {
        width: 80%;
        }

        .card-content p{
             text-align: left !important;
             padding-left: 20px;
        }
        .card-title {
        padding-left: 20px;
        }

        .coin{
            float: right !important;
            margin: 0;
            line-height: 100%;
        }

        .coin i::before{
                font-size: 35px;
                opacity: 0.7;
        }

        .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0.4;
  transition: .5s ease;
  background-color: orange;
}

.card-image:hover .overlay {
  opacity: 0;
}
    .response {
      margin-bottom : 30px;
      padding: 8px 10px;
      border-radius: 3px;
      color : white;
    }
    .error{
      background-color: rgba(248, 32, 102, 0.2);
      border: 3px solid #F91F66;
      padding: 1em;
    }
    .success{
      background-color: rgba(98, 189, 103, 0.2);
      border: 3px solid #66BB6A;
      padding: 1em;
      margin-bottom: 200px;
    }
    .required, .form-instructions {
      color : #e57373;
    }
    .form-instructions {
    font-size: 1rem;
    margin-left: 0.8em;
    }

    .invisible{
        display: none;
    }
    
    .fixed{
        z-index:9999;
    }


@media screen and (max-width: 801px) {
    .card-image{
        display:none;
    }

    .card-containor{
            width: 100%;
            height: auto}
    
    .right-content {
        width: 100%;
        }
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