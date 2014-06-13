<?php
/**
 * Text String / Translatable string used in tamatebako
 * @since 0.1.0
 */
function tamatebako_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Menu Fallback */
	$text['menu-primary-fallback-home'] = _x( 'Home', 'nav menu primary fallback home link', 'genbu' );

	/* Search */
	$text['search'] = _x( 'Search &hellip;', 'search text', 'genbu' );
	$text['search-button'] = _x( 'Search', 'search button', 'genbu' );

	/* Comments error */
	$text['comments-closed-pings-open'] = _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'genbu' );
	$text['comments-closed'] = _x( 'Comments are closed.', 'comments notice', 'genbu' );

	/* Content error */
	$text['error'] = _x( '404 Not Found', '404 title', 'genbu' );
	$text['error-msg'] = _x( 'Apologies, but no entries were found.', '404 content', 'genbu' );

	$text = apply_filters( 'tamatebako_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}


/**
 * Text String / Translatable string used in this theme
 * To keep track on language usage and separate from Hybrid Core.
 * @since 0.1.0
 */
function genbu_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Register Menus */
	$text['menu-primary-name'] = _x( 'Navigation', 'nav menu location', 'genbu' );
	$text['menu-footer-name'] = _x( 'Footer Links', 'nav menu location', 'genbu' );

	/* Register Sidebar */
	$text['sidebar-primary-name'] = _x( 'Main Sidebar', 'sidebar name', 'genbu' );
	$text['sidebar-secondary-name'] = _x( 'Navigation Sidebar', 'sidebar name', 'genbu' );

	/* Edit link */
	$text['edit'] = _x( 'Edit', 'edit link', 'genbu' );

	$text = apply_filters( 'genbu_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}
