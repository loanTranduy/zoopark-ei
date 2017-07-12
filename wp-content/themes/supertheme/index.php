<?php get_header(); ?>
<!-- INDEX -->
    <main>
        <?php if(have_posts()): 
        while(have_posts()): the_post();
        ?>
        <article>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div><?php the_excerpt(); ?></div>
            <footer>Publié par <?php the_author(); ?> le <?php the_time('j F Y'); ?> à <?php the_time('g:i a'); ?></footer>
        </article>
        <?php endwhile; else: ?>
        <p>Il n'y a pas d'articles pour le moment.</p>
        <?php endif; ?>
    </main>
<?php  get_footer(); ?>