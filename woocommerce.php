<?php
//$layout = 'content';

//$layout = 'content-sidebar1';
//$layout = 'sidebar1-content';
//$layout = 'sidebar2-content';
//$layout = 'content-sidebar2';

//$layout = 'sidebar2-content-sidebar1';
//$layout = 'sidebar2-sidebar1-content';
//$layout = 'content-sidebar1-sidebar2';
//$layout = 'sidebar1-content-sidebar2';

//tamatebako_set_layout( $layout );
//tamatebako_set_template_dir( "content-grid", "content" );
//tamatebako_add_body_class( array( "mobile-menu-active" ) );
?>

<?php get_header(); ?>

<div id="container">

	<?php get_template_part( 'site-header' ); ?>

	<?php hybrid_get_menu( 'primary' ); ?>

	<div id="main">

		<?php //hybrid_get_sidebar( 'secondary' ); ?>

		<div class="main-inner">

			<div class="main-wrap">

				<?php //hybrid_get_sidebar( 'primary' ); ?>

				<main <?php hybrid_attr( 'content' ); ?>>

						<div class="content-entry-wrap woocommerce-content-entry-wrap">

								<?php /* Start Content */ ?>
								<?php woocommerce_content(); ?>
								<?php /* End Content */ ?>

						</div><!-- .content-entry-wrap-->

				</main><!-- #content -->

				<?php hybrid_get_sidebar( 'primary' ); ?>

			</div><!-- .main-wrap -->

		</div><!-- .main-inner -->

		<?php hybrid_get_sidebar( 'secondary' ); ?>

	</div><!-- #main -->

	<?php get_template_part( 'site-footer' ); ?>

</div><!-- #container -->

<?php get_footer(); // Loads the footer.php template. ?>