<?php
/*
 * Footer box (sidebar) section of Corpus theme
 * 
 * @package Corpus
 */
?>
</div><!-- .content-section -->
</div> <!-- .main-section -->

<?php
    if ( corpus_get_option('disable_footerbox') ) {
        return;
    }
?>

        <div class="footerbox-bg-section clearfix">
            <div id="footerbox-section" class="footerbox-section grid-col-16 clearfix">
                <div id="footerbox-col-1" class="footerbox-col-1 footerbox-cols grid-col-33 grid-float-left">
                    <?php if ( !dynamic_sidebar( 'footerbox_sidebar_1' ) ): ?>
                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title"><?php _e( 'Recent Posts', 'corpus' ); ?></h4>
                            <ul><?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?></ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div id="footerbox-col-2" class="footerbox-col-2 footerbox-cols grid-col-33 grid-float-left">
                    <?php if ( !dynamic_sidebar( 'footerbox_sidebar_2' ) ): ?>
                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title"><?php _e( 'Archives', 'corpus' ); ?></h4>
                            <ul><?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 10, 'format' => 'html' ) ); ?></ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div id="footerbox-col-3" class="footerbox-col-3 footerbox-cols grid-col-33 grid-float-left">
                    <?php if ( !dynamic_sidebar( 'footerbox_sidebar_3' ) ): ?>
                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title"><?php _e( 'Meta', 'corpus' ); ?></h4>
                            <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <li><a href="<?php echo esc_url( get_bloginfo( 'rss2_url' ) ); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                            <li><a href="<?php echo esc_url( get_bloginfo( 'comments_rss2_url' ) ); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                            <?php
                            echo apply_filters( 'widget_meta_poweredby', sprintf( '<li><a href="%s" title="%s">%s</a></li>',
                                esc_url( __( 'https://wordpress.org/' ) ),
                                esc_attr__( 'Powered by WordPress, state-of-the-art semantic personal publishing platform.' ),
                                _x( 'WordPress.org', 'meta widget link text' )
                            ) );

                            wp_meta();

                            ?>
                            </ul>
                        </div>
                    
                        <div class="widget widget_search">
                            <?php get_search_form(); ?>
                        </div>

                    <?php endif; ?>
                </div>
            </div> <!-- .footerbox-section -->
        </div>
