<?php get_header(); ?>
<!-- SEARCH -->
  <div class="ask section">
    <div class="container">
      <div class="row">
        <div class="header-forms col s12 center white-text">
          <h3>
            Résultat de votre recherche
          </h3>
        </div>
      </div>
    </div>
  </div>

    <?php if(have_posts()) : ?>

    <div class="container">
    <h4><?php echo $wp_query->found_posts ?> <?php echo ($wp_query->found_posts > 1) ? "Résultats" : "résultat trouvé"?> pour "<?php the_search_query(); ?>"</h4></div>

    <?php while(have_posts()) : the_post(); ?>
<div class="container">
            <div class="card-containor">
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('image_couverture'); ?>" alt=""></a>
                            </div>
                            
                            <div class="icon-block right-content">
                                    

                                    <h3 class=" card-title"><a class="linkk" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php if(get_field('originen')): ?><em><?php the_field('origine'); ?></em><?php endif; ?></h3>

                                    <div class="card-content"><?php the_excerpt(); ?></div>
                                    <?php if(get_field('animal-icon')): ?><h2 class="coin "><i class="<?php the_field('animal-icon'); ?>"></i></h2><?php endif; ?>
                            </div>
                            </div>
        </div>
    <?php endwhile; else :?>
    <div class="container">
    <div class="row">
      <p>Désolé, la recherche de "<?php the_search_query(); ?>" n'a rien donné...</p>
    </div>
    </div>
    <?php endif; ?>

<?php get_footer(); ?>