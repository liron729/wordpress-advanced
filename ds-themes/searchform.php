<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search" id="searchform" class="searchform">
    <div>
        <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'ds-themes' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
        <input type="submit" id="searchsubmit" value="search"/>
    </div>
</form>