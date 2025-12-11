<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

        <?php
        while ( have_posts() ):
             the_post();
             get_template_part( 'parts/content', 'single' );
        ?>
        <div class="wp-devs-pagination">
            <div class="page next">
                <?php next_post_link('&laquo; %link'); ?>
            </div>
            <div class="page previous">
                <?php previous_post_link('%link &raquo;'); ?>
        </div>

        <?php
        
            if(comments_opem() || get_comments_number()):{
                comments_template();
            }

        endwhile;
        ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>