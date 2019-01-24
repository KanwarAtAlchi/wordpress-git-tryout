<?php
/**
 * Template for displaying archive page.
 * 
 * @package Corpus
 */
get_header() ?>
    <div class="archive-meta-container">
        <div class="archive-head">
            <h1><?php
                if ( is_day() ) :
                    printf( __( 'Daily Archives:', 'corpus' ).' %s', '<span>' . get_the_date() . '</span>' );
                elseif ( is_month() ) :
                    printf( __( 'Monthly Archives:', 'corpus' ).' %s', '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'corpus')) . '</span>' );
                elseif ( is_year() ) :
                    printf( __( 'Yearly Archives:', 'corpus' ).' %s', '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'corpus')) . '</span>' );
                else :
                    _e( 'Blog Archives', 'corpus' );
                endif; ?></h1>
        </div>
        <div class="archive-description">
            <?php printf( '<p>'.__( 'Archive of posts published in the specified', 'corpus' ).' %s </p>', corpus_date_text() ) ?>
        </div>
    </div><!-- .archive-meta-container -->

    <div class="inner-content-section grid-pct-65">
        <div class="loop-container-section clearfix">
        <?php
            if ( have_posts() ) :

                // Start the Loop.
                while ( have_posts() ): the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called loop-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'loop', get_post_format() );

                // End the Loop.
                endwhile;

                corpus_archive_nav();

            else :

            corpus_404_show();

            endif;
        ?>
        </div><!-- .loop-container-section -->
    </div><!-- .inner-content-section ends -->
    <?php get_sidebar() ?>
<?php get_footer() ?>