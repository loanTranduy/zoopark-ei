<?php get_header(); ?>
<!-- SEARCH -->
    <main>
        <section>
        <h1>Recherche</h1>
        <?php if(have_posts()): ?>
        <p><?php echo $wp_query->found_posts; ?> résultats pour la recherche de <em>"<?php the_search_query(); ?>"</em></p>
            <ul>
            <?php while(have_posts()): the_post();?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile;?>
            </ul>
        <?php else: ?>
            <p>Désolé, aucune entrée ne fait référence à "<?php the_search_query(); ?>".</p>
        <?php endif; ?>
        
        <?php
        /* 
            Pour voir le contenu de la requête et les résultats:
            <pre><?php print_r($wp_query); ?></pre>
        */
        ?>
        </section>
        <aside><?php get_sidebar(); ?></aside>
    </main>
<?php  get_footer(); ?>