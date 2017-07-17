<?php get_header(); ?>
<!-- ARCHIVE_BILLETERIE-->
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

        <div class="section" style="padding-bottom: 0;">
            
            <div class="row" style="margin-bottom:0;">
                <div class="container">
                <div class="col s12 center" style="margin-bottom:2px;">
                    <ul class="tabs ">
                        <?php if(get_field('titre_1')): ?><li class="tab col s3"><a class="active" href="#prix1"><?php the_field('titre_1'); ?></a></li><?php endif;?>
                        <?php if(get_field('titre_2')): ?><li class="tab col s3"><a href="#prix2"><?php the_field('titre_2'); ?></a></li><?php endif;?>
                        <?php if(get_field('titre_3')): ?><li class="tab col s3"><a href="#prix3"><?php the_field('titre_3'); ?></a></li><?php endif;?>
                    </ul>
                </div>
                </div>

                <!--JOURS-->
                <div id="prix1" class="col s12 orange">
                    <div class="section" style="padding:60px 0;margin: 0 10%;display:flex; justify-content:center">
                            <!--ENFANTS-->
                            <?php if(get_field('enfants_1')): ?><div class="center stamp">
                                <div class="ticket">
                                    <h4 class="enfant">Tickets enfants</h4>
                                    <p><?php the_field('infos_1'); ?></p>
                                    <p class="prix enfant"><?php the_field('enfants_1'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>
                            
                            <!--ADULTES-->
                            <?php if(get_field('adulte_1')): ?><div class="center stamp ">
                                <div class="ticket">
                                    <h4 class="adulte">Tickets adultes</h4>
                                    <p><?php the_field('infos_1'); ?></p>
                                    <p class="prix adulte"><?php the_field('adulte_1'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>

                            <!--SENIORS-->
                            <?php if(get_field('seniors_1')): ?><div class="center stamp">
                                <div class="ticket">
                                    <h4 class="senior">Tickets seniors</h4>
                                    <p><?php the_field('infos_1'); ?></p>
                                    <p class="prix senior"><?php the_field('seniors_1'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>
                                    </div>

                </div><!--FIN JOURS-->
                

                <!--ZONE PRIX 2-->
                                <div id="prix2" class="col s12 orange">
                    <div class="section" style="padding:60px 0;margin: 0 10%;display:flex; justify-content:center">
                            <!--ENFANTS-->
                            <?php if(get_field('enfants_2')): ?><div class="center stamp">
                                <div class="ticket">
                                    <h4 class="enfant">Zoopass enfants</h4>
                                    <p><?php the_field('infos_2'); ?></p>
                                    <p class="prix enfant"><?php the_field('enfants_2'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>
                            
                            <!--ADULTES-->
                            <?php if(get_field('adultes_2')): ?><div class="center stamp ">
                                <div class="ticket">
                                    <h4 class="adulte">Zoopass adultes</h4>
                                    <p><?php the_field('infos_2'); ?></p>
                                    <p class="prix adulte"><?php the_field('adultes_2'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>

                            <!--SENIORS-->
                            <?php if(get_field('seniors_2')): ?><div class="center stamp">
                                <div class="ticket">
                                    <h4 class="senior">Zoopass seniors</h4>
                                    <p><?php the_field('infos_2'); ?></p>
                                    <p class="prix senior"><?php the_field('seniors_2'); ?><span>€</span></p>
                                    <a href="#" class="conditions" style="display:flex; justify-content:center">
                                        <i class="material-icons grey-text" style="font-size: 1.2em; line-height: 3.4em; padding-right: 0.3em;">info_outline</i>
                                        <p class="grey-text" >conditions</p>
                                    </a>
                                    <p class="grey-text" style="margin:0">*<small>Pass individuel</small></p>
                                </div>     
                            </div><?php endif;?>
                                    </div>

                </div><!--FIN ABO-->


            </div>
        </div>

    </main>
<?php  get_footer(); ?>