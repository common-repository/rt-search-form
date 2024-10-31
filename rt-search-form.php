<?php
/*
Plugin Name: Royal Search Form
Plugin URI: http://wordpress.org/plugins/rt-search-form
Description: This plugin add search form in post/page using shortcode [rtsearchform].
Version: 1.0.0
Author: Mehdi Akram
Author URI: http://profiles.wordpress.org/royaltechbd
License: GPLv2 or later
*/



function rtsearchform( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div class="rtsearchform"><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';
    return $form;
}

add_shortcode('rtsearchform', 'rtsearchform');





?>