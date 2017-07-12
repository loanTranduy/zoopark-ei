<?php get_header(); ?>
<!-- PAGE -->
    <main>
          <div class="ask section">
            <div class="container">
            <div class="row">
                <div class="header-forms col s12 center white-text">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            </div>
        </div>

        <section>
            <?php if(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
            <?php endif; ?>
        </section>
    </main>
<?php  get_footer(); ?>