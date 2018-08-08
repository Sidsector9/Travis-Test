<?php
/**
 * Plugin Name: Travis Test
 * Text Domain: travis-test
 */

function change_blog_title( $output, $show ) {
    if ( $show != 'name' ) { 
    	return $output;
    }

    return __( 'Travis Title', 'travis-test' );
}

add_filter( 'bloginfo', 'change_blog_title', 10, 2 );