<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hacker
 */

get_header(); ?>
    <header class="archive-header">
        <?php
            the_archive_title( '<h1 class="archive-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .archive-header -->
    <main id="main" class="site-main" role="main">
        <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </main>
    <!-- END #main -->
<?php
get_footer();