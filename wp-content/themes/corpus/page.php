<?php
/*
 * Template for displaying single pages.
 * 
 * @package Corpus
 */
get_header() ?>
    <?php if( have_posts() ) : while( have_posts() ): the_post() ?>
        <div id="post-<?php the_ID() ?>" <?php post_class('inner-content-section grid-pct-65') ?>>
            <div class="post-title">
                <?php if ( is_front_page() ): ?>
                      <h1 class="front-page"><?php the_title() ?></h1>
                <?php else: ?>
                      <h1 class="inner-page"><?php the_title() ?></h1>
                <?php endif; ?>
            </div>

            <div class="post-content">
                <?php the_content() ?>
                <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'corpus') . '</span>', 'after' => '</div>')) ?>
            </div>

            <div class="post-below-content">
                <?php edit_post_link( __( 'Edit', 'corpus' ), '<div class="edit-link">', '</div>' ) ?>
            </div>

        <?php
            endwhile;
            comments_template( '', true );
            endif;
        ?>
        </div><!-- .inner-content-section -->    
    <?php get_sidebar() ?>
<?php get_footer() ?>