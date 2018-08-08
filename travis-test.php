<?php
/**
 * Plugin Name: Travis Test
 */

function change_blog_title( $output, $show ) {
    if ( $show != 'name' ) { 
    	return $output;
    }

    return 'Travis Title';
}

add_filter( 'bloginfo', 'change_blog_title', 10, 2 );