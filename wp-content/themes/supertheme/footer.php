    <footer class="page-footer brown lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l3 m6 s12">
                    <h3 class="white-text">Spectacles</h3>
                        <?php
                         // Spectacle
                          $args = array(
                              'cat' => 4,
                              'post_status'   =>  'publish',
                              'posts_per_page' =>  4
                          );
                         $requete = new WP_Query($args);
                            if($requete->have_posts()):?>

                                <ul class="footer-links">
                                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                                        <li>
                                            <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                            <?php endwhile; ?>
                                </ul>
                        <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="col l3 m6 s12">
                    <h3 class="white-text">Activités</h3>
                    <?php
                         // Spectacle
                          $args = array(
                              'cat' => 5,
                              'post_status'   =>  'publish',
                              'posts_per_page' =>  4
                          );
                         $requete = new WP_Query($args);
                            if($requete->have_posts()):?>

                                <ul class="footer-links">
                                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                                        <li>
                                            <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                            <?php endwhile; ?>
                                </ul>
                        <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="gmap col l6 m12 s12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.3975145563018!2d4.466528315732126!3d50.470942979478245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22920c155cb77%3A0x122916fe7183d084!2sCentre+de+comp%C3%A9tence+Forem+Cepegra!5e0!3m2!1sfr!2sbe!4v1499847743315" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="section white">
            <div class="access-map container">
                <div class="row">
                                        <?php
                        $args = array(
                            'post_type' =>  'coordonees',
                            'post_status'   =>  'publish',
                            'posts_per_page' =>  1
                           );
                    $requete = new WP_Query($args);
                    if($requete->have_posts()):?>
                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                    <div class="col s12 center">
                        <h3 class="brown-text">Adresse</h3>
                        <p>
                            <h4><em>Gosselies</em><?php the_custom_logo()?></h4><span itemprop="streetAddress"><?php the_field('rue'); ?> -</span> <span itemprop="addressLocality"><?php the_field('code_postal'); ?> <?php the_field('ville:'); ?> - </span> (<span itemprop="addressRegion"><?php the_field('pays:'); ?></span>)</p>
                        <p><?php the_field('infos'); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <div class="footer-copyright center grey darken-4">
            <div class="container">ZooPark <a class="brown-text text-lighten-3" href="#">2016</a></div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/app.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/materialize.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/init.js"></script>
      <script>
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
  </script>
</body>

</html>