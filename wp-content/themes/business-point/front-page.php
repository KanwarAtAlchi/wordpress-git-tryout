<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business_Point
 */

get_header(); ?>

<div id="showcase" class = "showcase-background">
    <div id="cloud" style="text-align: center;">
        <img src="https://xebialabs-clients-iglusjax.stackpathdns.com/assets/files/homepage/cloud-icon.png" alt="cloud">
        <p>MOVE TO 
            <br>CLOUD</p>
    </div>
    <div id="cloud" style="text-align: center;">
        <img src="https://xebialabs-clients-iglusjax.stackpathdns.com/assets/files/homepage/ship-icon.png" alt="ship">
        <p>MOVE TO 
            <br>CLOUD</p>
    </div>
    <div id="cloud" style="text-align: center;">
        <img src="https://xebialabs-clients-iglusjax.stackpathdns.com/assets/files/homepage/pipes-icon.png" alt="pipes">
        <p>MOVE TO 
            <br>CLOUD</p>
    </div>
    <div id="cloud" style="text-align: center;">
        <img src="https://xebialabs-clients-iglusjax.stackpathdns.com/assets/files/homepage/shield-icon.png" alt="cloud">
        <p>MOVE TO 
            <br>CLOUD</p>
    </div>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div id="home-page-description">
                <?php
                while ( have_posts() ) : the_post();

                    // get_template_part( 'template-parts/content', 'page' );
                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
