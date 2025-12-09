<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header class="page-header">
                        <h1>page not found</h1>
                        <p>unfortunately, the page u tride to reach does not exist on this site. </p>
                    </header>
                    <div class="error">
                        <p>how about doing a search?</p>
                        <?php get_search_form(); ?>
                        <?Php
                        the_widget( 
                            'WP_Widget_Recent_Posts' 
                            array(
                            'title' => 'latest posts'
                            'number' => 3
                        )
                        );
                        ?>

</div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>