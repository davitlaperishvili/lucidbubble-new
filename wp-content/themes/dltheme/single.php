<?php get_header(); ?>

<main class="blog_post_page">
    <?php 
        if( have_rows('sections') ):

            // Loop through rows.
            while ( have_rows('sections') ) : the_row();
                $rowName = get_row_layout();
                
                include(TEMPLATEPATH.'/acf-widgets/widget-'.$rowName.'.php');
            endwhile;
        
        else :
        endif;
    ?>
</main>

<?php get_footer(); ?>