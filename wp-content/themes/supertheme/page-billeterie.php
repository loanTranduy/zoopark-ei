<?php get_header(); ?>
<!-- ARCHIVE_BILLETERIE-->
    <main>
        <div class="ask section">
            <div class="container">
            <div class="row">
                <div class="header-forms col s12 center white-text">
                    <h3>ACHETEZ DES TICKETS EN LIGNE</h3>
                </div>
            </div>
            </div>
        </div>

<div class="opening container" >
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3 class="orange-text">Achetez votre ZOOPASS et accéder à notre Parc toute l'année !</h3>
                    
                    <ul class="tabs">
                        <?php if(get_field('titre_1')): ?><li class="tab col s3"><a class="active" href="#prix1"><?php the_field('titre_1'); ?></a></li><?php endif;?>
                        <?php if(get_field('titre_2')): ?><li class="tab col s3"><a href="#prix2"><?php the_field('titre_2'); ?></a></li><?php endif;?>
                        <?php if(get_field('titre_3')): ?><li class="tab col s3"><a href="#prix3"><?php the_field('titre_3'); ?></a></li><?php endif;?>
                    </ul>
                </div>
                <div id="prix1" class="col s12">
                            <!--<div class="call orange lighten-1">-->
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
                                            
                                                
                                                <a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong><?php the_title(); ?></strong><span><?php the_field('prix-adulte'); ?></span></a> 
                                            <?php endwhile; ?>
                                        <?php endif; wp_reset_postdata(); ?>
                                                <p>*<small>Pass individuel</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                </div>
                <div id="prix2" class="col s12">
                    <?php if(get_field('contenu_2')): ?><p><?php the_field('contenu_2'); ?></p><?php endif;?>
                </div>
                <div id="prix3" class="col s12">
                    <?php if(get_field('contenu_3')): ?><p><?php the_field('contenu_3'); ?></p><?php endif;?>
                </div>

            </div>
        </div>
    </div>
    </main>
<?php  get_footer(); ?>