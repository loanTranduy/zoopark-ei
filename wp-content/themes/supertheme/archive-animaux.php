<?php get_header(); ?>
<!-- ARCHIVE_ANIMAUX -->
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
        <?php if(have_posts()): 
        while(have_posts()): the_post();
        ?>
        <div class="container">
            <div class="card-containor">
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                <img class="hoverZoomLink" src="<?php the_field('image_couverture'); ?>" alt=""></a>
                            </div>
                            
                            <div class="icon-block right-content">
                                    

                                    <h3 class=" card-title"><a class="linkk" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><em><?php the_field('origine'); ?></em></h3>

                                    <div class="card-content"><?php the_excerpt(); ?></div>
                                    <?php if(get_field('animal-icon')): ?><h2 class="coin "><i class="<?php the_field('animal-icon'); ?>"></i></h2><?php endif; ?>
                            </div>
                            </div>
        </div>
        
        <?php endwhile; else: ?>
        <p>Il n'y a pas d'articles pour le moment.</p>
        <?php endif; ?>
    </main>
<?php  get_footer(); ?>
