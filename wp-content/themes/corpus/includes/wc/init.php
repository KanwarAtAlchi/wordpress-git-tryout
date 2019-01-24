<?php
/**
 * WooCommerce Integration
 * 
 * @package Corpus
 * @since 1.0.2.1
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'corpus_wc_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'corpus_wc_wrapper_end', 10);

function corpus_wc_wrapper_start() {
  echo '<div class="inner-content-section">';
}

function corpus_wc_wrapper_end() {
  echo '</div>';
}