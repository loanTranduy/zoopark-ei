<?php get_header(); ?>

<!-- SINGLE_ANIMAUX -->
    <main>
<div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <!--Parallax 2 content-->
                    <div class="row center">
                        <h3 class="header col s12 light">Les animaux</h3>
                    </div>
            </div>
        </div>
        <div class="parallax"><img src="<?php the_field('image_principale'); ?>" alt="Unsplashed background img 2"></div>
    </div>
        <div class="container">
        <div class="col s12 m4">
            <div class="row">
                <?php  if(have_posts()): the_post();?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                
                <?php endif; ?>
            </div>
        </div>

    </main>
<?php  get_footer(); ?>

