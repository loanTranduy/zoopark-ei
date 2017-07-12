<form class="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
    <label for="search">Recherche</label>
    <input type="text" name="s" id="search" placeholder="Recherche" value="<?php the_search_query(); ?>" />
    <input type="submit" value="Envoyer" />
</form>