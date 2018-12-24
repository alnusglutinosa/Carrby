<?php
get_header(); ?>

        <?php
        // Include slider template.
        get_template_part( 'parts/slider', 'single' ); ?>
        
        <div class="main-wrapper">

            <?php
            // Include services template.
            get_template_part( 'parts/services', 'single' );
            
            // Include about template.
            get_template_part( 'parts/about', 'single' );

            // Include works template.
            get_template_part( 'parts/works', 'single' );
            
            // Include blog template.
            get_template_part( 'parts/blog', 'single' );
            
            // Include contact template.
            get_template_part( 'parts/contact', 'single' );
            
            ?>            

        <?php //get_sidebar(); ?>
        <?php get_footer(); ?>   