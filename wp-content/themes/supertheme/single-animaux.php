<?php get_header(); ?>
<!-- SINGLE_ANIMAUX -->
    <main>
        <div class="ask section">
            <div class="container">
            <div class="row">
                <div class="header-forms col s12 center white-text">
                    <h3>Les animaux</h3>
                </div>
            </div>
            </div>
        </div>
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

