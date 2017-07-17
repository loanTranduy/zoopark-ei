<?php get_header(); ?>
<!-- FRONT PAGE -->

<!--Parallax 1-->
<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="slogan container">
                <!--Parallax 1 content-->
                <?php if(get_field('parallax_1_titre')): ?>
                    <div class="row center">
                        <h2 class="header col s12 light"><?php the_field('parallax_1_titre'); ?></h2>
                    </div>
                <?php endif; ?>
                <div class="row center"><a href="https://killer-cepegra.xyz/skills5/zoopark/billeterie/" id="download-button" class="btn-large waves-effect waves-light brown lighten-1"><?php the_field('button'); ?></a></div>
            </div>
        </div>
        <div class="parallax"><?php if(get_field('parallax_1')): ?><img src="<?php the_field('parallax_1'); ?>" alt="Unsplashed background img 1"><?php endif; ?></div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                    <?php
                        $args = array(
                            'post_type' =>  'animaux',
                            'post_status'   =>  'publish',
                            'posts_per_page' =>  3
                           );
                    $requete = new WP_Query($args);
                    if($requete->have_posts()):?>
                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                    <!--La boucle des animaux-->
                        <div class="col s12 m4">
                            <div class="icon-block">
                                    <?php if(get_field('animal-icon')): ?><h2 class="center brown-text"><i class="<?php the_field('animal-icon'); ?>"></i></h2><?php endif; ?>
                                    <h3 class="center"><?php the_title(); ?><em><?php the_field('origine'); ?></em></h3>
                                    <?php if(get_field('excerpt')): ?><p class="light"><?php the_field('excerpt'); ?></p><?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    
    <div class="call orange lighten-1">
        <div class="container">
            <div class="section">
                <div class="row">
                <!--La boucle des zoopass-->
                    <div class="col s12 center">
                        <p>Achetez votre ZOOPASS et accéder à notre Parc toute l'année !</p>
                <?php
                        $args = array(
                            'post_type' =>  'zoopass',
                            'post_status'   =>  'publish',
                            'posts_per_page' =>  2
                           );
                    $requete = new WP_Query($args);
                    if($requete->have_posts()):?>
                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                    
                        
                        <a href="https://killer-cepegra.xyz/skills5/zoopark/billeterie/" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong><?php the_title(); ?></strong><span><?php the_field('prix-adulte'); ?></span></a> 
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
                        <p>*<small>Pass individuel</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Parallax 2-->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container" id="horaire">
                <!--Parallax 2 content-->
                <?php if(get_field('parallax_2_titre')): ?>
                    <div class="row center">
                        <h3 class="header col s12 light"><?php the_field('parallax_2_titre'); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="parallax"><?php if(get_field('parallax_2')): ?><img src="<?php the_field('parallax_2'); ?>" alt="Unsplashed background img 2"><?php endif; ?></div>
    </div>
    <div class="opening container" >
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3 class="orange-text">Horaires</h3>
                    <h4>Jours d'ouverture et heures d'ouverture</h4>
                    <ul class="tabs">
                        <?php if(get_field('saison-1')): ?><li class="tab col s3"><a href="#spring"><?php the_field('saison-1'); ?></a></li><?php endif;?>
                        <?php if(get_field('saison_2')): ?><li class="tab col s3"><a class="active" href="#summer"><?php the_field('saison_2'); ?></a></li><?php endif;?>
                        <?php if(get_field('saison_3')): ?><li class="tab col s3"><a href="#winter"><?php the_field('saison_3'); ?></a></li><?php endif;?>
                        <?php if(get_field('saison_4')): ?><li class="tab col s3"><a href="#new"><?php the_field('saison_4'); ?></a></li><?php endif;?>
                    </ul>
                </div>
                <div id="spring" class="col s12">
                    <?php if(get_field('contenu_1')): ?><p><?php the_field('contenu_1'); ?></p><?php endif;?>
                </div>
                <div id="summer" class="col s12">
                    <?php if(get_field('contenu_2')): ?><p><?php the_field('contenu_2'); ?></p><?php endif;?>
                </div>
                <div id="winter" class="col s12">
                    <?php if(get_field('contenu_3')): ?><p><?php the_field('contenu_3'); ?></p><?php endif;?>
                </div>
                <div id="new" class="col s12">
                    <?php if(get_field('contenu_4')): ?><p><?php the_field('contenu_4'); ?></p><?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <!--Parallax 3-->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <!--Parallax 3 content-->
                <?php if(get_field('parallax_3_titre')): ?>
                    <div class="row center">
                        <h3 class="header col s12 light"><?php the_field('parallax_3_titre'); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="parallax"><?php if(get_field('parallax_3')): ?><img src="<?php the_field('parallax_3'); ?>" alt="Unsplashed background img 3"><?php endif; ?></div>
    </div>
<?php  get_footer(); ?>