<?php
/**
 * The homepage file.
 * 
 * @package Corpus
 */
get_header() ?>
    <?php if(is_front_page()) corpus_cta_section_show() ?>
        <?php if (!is_front_page()): ?>
            <div class="archive-meta-container">
                <div class="archive-head">
                    <?php echo '<h1>' . __('Our Blog', 'corpus') . '</h1>' ?>
                </div>
                <div class="archive-description">
                </div>
            </div><!-- .archive-meta-container -->
        <?php endif; ?>

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
    </div><!-- .inner-content-section -->
    <?php get_sidebar() ?>

<?php get_footer() ?>