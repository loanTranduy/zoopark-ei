<?php get_header(); ?>
<!--PAGE-MAP-->
    <div class="input-field col s12">
        <select class="icons" id="liste">
            <option value="" disabled="disabled " selected="selected">Rechercher un animal</option>

            <?php
            //Liste déroulante
            $args = array(
                'post_type' => 'animaux',
            );
            $requete = new WP_Query($args);
            if($requete->have_posts()) :
            while($requete->have_posts()) : $requete->the_post(); 
            ?>

            <?php if(get_field('icon_longitude') && get_field('icon-latitude') && get_field('map-icon')) : ?>
            <option value="<?php the_title() ?>"
                
                <?php $icon = get_field('map-icon');
                    if( !empty($icon)) : ?>
                    data-icon="<?php echo $icon['url']; ?>"
                    <?php endif; ?>
                class="left circle"><?php the_title() ?></option>
            <?php endif;?>
            <?php endwhile; endif; 
            wp_reset_postdata();?>
        </select>
        <label>Vous êtes perdu? </label>
    </div>

<!-- MAP -->
 <div class="mini-map section">
   <div class="container">
     <div class="row">
       <div id="mapIn" class="col s12">

         <?php 
         //icon de la map + MOI
         if(have_posts()) : the_post(); ?>
          <img src="<?php the_field('map_fld'); ?>" alt="map">
          <div id="pointer"></div><!--MOI-->
         <?php endif; ?>

        <!-- ANIMAUX SUR LA MAP -->
         <?php 

          $args = array(
             'post_type' => 'animaux',
          );
           $requete = new WP_Query($args);
           if($requete->have_posts()) :
           while($requete->have_posts()) : $requete->the_post(); ?>

           <?php if(get_field('icon_longitude') && get_field('icon-latitude') && get_field('map-icon')) : ?>

           <div class="animal-icon" data-long="<?php the_field('icon_longitude'); ?>" data-lat="<?php the_field('icon-latitude'); ?>" data-animal="<?php the_title(); ?>"> 

            <?php $icon = get_field('map-icon');
              if( !empty($icon)) : ?>
                <img src="<?php echo $icon['url']?>" alt="<?php the_title(); ?>">
            <?php endif;?>

           </div>
           <?php endif;?>
          
          <?php endwhile; endif; 
          wp_reset_postdata();?>

       </div>
     </div>
   </div>
 </div>
<?php get_footer(); ?>