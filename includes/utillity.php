<?php
/**
 * Utillity Functions
 * This functions use anon functions, require PHP 5.3 or later.
 * @since 1.2.3
 * @package Tamatebako
 */

/**
 * Set Layout
 * @param $new_layout string
 * @since 0.1.0
 */
function tamatebako_set_layout( $new_layout ){
	$filter_layout = function( $layout ) use( $new_layout ){
		return $new_layout;
	};
	add_filter( 'theme_mod_theme_layout', $filter_layout );
}


/**
 * Set Template Dir
 * @param $old_dir string
 * @param $new_dir string
 * @since 0.1.0
 */
function tamatebako_set_template_dir( $new_dir, $old_dir ){
	$filter_dir = function( $dir ) use( $new_dir, $old_dir ){
		if ( $dir == $old_dir ){
			return $new_dir;
		}
		return $dir;
	};
	add_filter( 'tamatebako_get_template_dir', $filter_dir );
}


/**
 * Add Body Classes
 * @param $new_classes array
 * @since 0.1.0
 */
function tamatebako_add_body_class( $new_classes ){
	$add_classes = function( $classes ) use( $new_classes ){
		foreach( $new_classes as $new_class ){
			$classes[] = $new_class;
		}
		$classes = array_unique( $classes );
		return $classes;
	};
	add_filter( 'body_class', $add_classes );
}
