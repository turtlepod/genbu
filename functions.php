<?php
/**
 * Theme Functions
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

	/* === DEBUG === */
	$debug_args = array(
		'mobile'         => 0,
		'media-queries'  => 0,
	);
	//add_theme_support( 'tamatebako-debug', $debug_args );

	/* === Post Formats === */
	$post_formats_args = array(
		'aside',
		'image',
		'gallery',
		'link',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	);
	add_theme_support( 'post-formats', $post_formats_args );

	/* === Theme Layouts === */
	$layouts = array(
		/* One Column */
		'content' => genbu_string( 'layout-c' ),
		/* Two Columns */
		'content-sidebar1' => genbu_string( 'layout-c-s1' ),
		'sidebar1-content' => genbu_string( 'layout-s1-c' ),
		'sidebar2-content' => genbu_string( 'layout-s2-c' ),
		'content-sidebar2' => genbu_string( 'layout-c-s2' ),
		/* Three Columns */
		'sidebar2-content-sidebar1' => genbu_string( 'layout-s2-c-s1' ), /* Default */
		'sidebar2-sidebar1-content' => genbu_string( 'layout-s2-s1-c' ),
		'content-sidebar1-sidebar2' => genbu_string( 'layout-c-s1-s2' ),
		'sidebar1-content-sidebar2' => genbu_string( 'layout-s1-c-s2' ),
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
	
	//dev:
	$style_args = array(
		'theme-open-sans-font',
		'dashicons',
		'theme-reset',
		'theme-menus',
		'theme',
		'media-queries',
		//'debug-media-queries'
	);

	$style_args = array( 'theme-open-sans-font', 'dashicons', 'parent', 'style' );
	add_theme_support( 'hybrid-core-styles', $style_args );

	/* === Editor Style === */
	$editor_css = array(
		tamatebako_google_open_sans_font_url(),
		'css/reset.min.css',
		'css/editor.css'
	);
	add_editor_style( $editor_css );

	/* === Customizer Mobile View === */
	add_theme_support( 'tamatebako-customize-mobile-view' );

	/* === Custom Background === */
	add_theme_support( 'custom-background', array( 'default-color' => 'e6e6e6' ) );

	/* === Custom Header === */
	$header_args = array(
		'default-text-color'     => '444444',
		'wp-head-callback'       => 'genbu_custom_header_wp_head_callback',
		'admin-head-callback'    => 'genbu_custom_header_admin_head_callback',
		'admin-preview-callback' => 'genbu_custom_header_admin_preview_callback',
	);
	add_theme_support( 'custom-header', $header_args );

	/* === Set Content Width === */
	hybrid_set_content_width( 1200 );

	/* === Plugins === */
	add_theme_support( 'woocommerce' );
}

/**
 * Custom Header WP Head Callback
 * @since 0.1.1
 */
function genbu_custom_header_wp_head_callback(){

	/* Default value */
	$style = '';

	/* If display header text, display as background to #header */
	if ( display_header_text() ){

		/* Use Header Text Color */
		if ( get_header_textcolor() ){
			$style .= '.custom-header #site-title a,';
			$style .= '.custom-header #site-title a:hover';
			$style .= '{color:#' . get_header_textcolor() . ';}';
		}
	}

	/* If header Image is set */
	if ( get_header_image() ) {
		$style .= '#site-logo{ max-width:' . get_custom_header()->width . 'px; }';
	}

	/* Print */
	if ( !empty( $style ) ){
		echo "\n" . '<style type="text/css" id="custom-header-css">' . trim( $style ) . '</style>' . "\n";
	}
}

/**
 * Custom Header Admin Head Callback
 * @since 0.1.1
 */
function genbu_custom_header_admin_head_callback(){
	$hex = get_header_textcolor();
	$text_color_style = '';
	if ( !empty( $hex ) ){
		$text_color_style = "#site-title a, #site-title a:hover { color: #{$hex}; }";
	}
?>
<link href='//fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
<style type="text/css" id="custom-header-css">
#fake-body{
	background: #e6e6e6;
	padding: 20px;
	padding-bottom: 0;
}
#header{
	background: #fff;
	border-bottom: 1px solid #ededed;
	padding: 20px;
}
#branding:after{
	content:".";display:block;height:0;clear:both;visibility:hidden;
}
#site-title{
	font-size: 25px;
	margin:0;
}
#site-title a{
	font-weight: 800;
	color: #444;
	text-decoration: none;
}
#site-title a:hover{
	color: #444;
	opacity: 0.8;
}
#site-description{
	font-size: 17px;
	color: #6A6A6A;
	margin-bottom: 0;
}
	/* == Custom Header Image == */

	/* No text, use as logo */
	#site-logo{
		margin: 0;
		width: 100%;
	}
	#site-logo img.header-image{
		display: block;
	}
	/* Text with image, use as banner */
	#fake-body.custom-header.custom-header-image.custom-header-text #header{
		padding: 0;
		border: none;
	}
	#fake-body.custom-header.custom-header-image.custom-header-text #branding{
		padding: 20px;
	}
	#fake-body.custom-header.custom-header-image.custom-header-text #header-image-banner img.header-image{
		display: block;
		width: 100%;
		height: auto;
	}
<?php echo trim( $text_color_style ); ?>
</style>
<?php
}

/**
 * Custom Header Admin Preview Callback
 * @since 0.1.1
 */
function genbu_custom_header_admin_preview_callback(){
?>
<div id="fake-body" <?php hybrid_attr( 'body' ); // Fake <body> class. ?>>
	<?php require_once( trailingslashit( get_template_directory() ) . 'site-header.php' ); ?>
</div>
<?php
}

/**
 * Custom Content Portfolio Project Link
 * @since 0.1.4
 */
function genbu_ccp_project_link(){
	$url = get_post_meta( get_the_ID(), 'portfolio_item_url', true );
	if ( $url ){
?>
<div class="ccp-project-link">
	<p><a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo genbu_string('ccp-view-project'); ?></a></p>
</div>
<?php
	}
}


do_action( 'genbu_after_setup_theme' );