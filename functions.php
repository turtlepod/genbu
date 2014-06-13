<?php
/**
 * Genbu Theme Functions
** ---------------------------- */

/* Load text string used in theme */
require_once( trailingslashit( get_template_directory() ) . 'includes/string.php' );

/* Load base theme functionality. */
require_once( trailingslashit( get_template_directory() ) . 'includes/tamatebako.php' );

/* Load theme general setup */
add_action( 'after_setup_theme', 'genbu_setup' );

/**
 * General Setup
 * @since 0.1.0
 */
function genbu_setup(){

	/* === Post Formats === */
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'chat' ) );


	/* === Theme Layouts === */
	$layouts = array(
		/* One Column */
		'content' => 'Content',
		/* Two Columns */
		'content-sidebar1' => 'Content / Sidebar 1',
		'sidebar1-content' => 'Sidebar 1 / Content',
		'sidebar2-content' => 'Sidebar 2 / Content',
		'content-sidebar2' => 'Content / Sidebar 2',
		/* Three Columns */
		'sidebar2-content-sidebar1' => 'Sidebar 2 / Content / Sidebar 1', /* Default */
		'sidebar2-sidebar1-content' => 'Sidebar 2 / Sidebar 1 / Content',
		'content-sidebar1-sidebar2' => 'Content / Sidebar 1 / Sidebar 2',
		'sidebar1-content-sidebar2' => 'Sidebar 1 / Content / Sidebar 2',
	);
	$layouts_args = array(
		'default'   => 'sidebar2-content-sidebar1',
		'customize' => true,
		'post_meta' => true,
	);
	add_theme_support( 'theme-layouts', $layouts, $layouts_args );


	/* === Register Sidebars === */
	$sidebars_args = array(
		"primary" => array( "name" => genbu_string( 'sidebar-primary-name' ), "description" => "" ),
		"secondary" => array( "name" => genbu_string( 'sidebar-secondary-name' ), "description" => "" ),
	);
	add_theme_support( 'tamatebako-sidebars', $sidebars_args );


	/* === Register Menus === */
	$menus_args = array(
		"primary" => genbu_string( 'menu-primary-name' ),
		"footer" => genbu_string( 'menu-footer-name' ),
	);
	add_theme_support( 'tamatebako-menus', $menus_args );


	/* === Load Stylesheet === */
	add_theme_support( 'hybrid-core-styles', array( 'theme-open-sans-font', 'dashicons', 'parent', 'style', 'media-queries' ) );
	//add_theme_support( 'hybrid-core-styles', array( 'theme-open-sans-font', 'dashicons', 'parent', 'style' ) );


	/* === Editor Style === */
	add_editor_style( array( 'style.css', tamatebako_google_open_sans_font_url() ) );


	/* === Custom Background === */
	add_theme_support( 'custom-background', array( 'default-color' => 'e6e6e6' ) );
}

do_action( 'genbu_after_theme_setup' );