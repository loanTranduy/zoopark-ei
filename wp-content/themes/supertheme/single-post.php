<?php get_header(); ?>

<!-- SINGLE_ANIMAUX -->
    <main>
    <?php if(get_field('image_couverture')): ?>
<div class="parallax-container valign-wrapper">

        <div class="parallax"><img src="<?php the_field('image_couverture'); ?>" alt="Unsplashed background img 2"></div>
    </div><?php endif; ?>
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