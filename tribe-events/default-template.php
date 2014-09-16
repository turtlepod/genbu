<?php get_header(); ?>

<div id="container">

	<?php tamatebako_skip_to_content(); ?>

	<?php get_template_part( 'site-header' ); ?>

	<?php hybrid_get_menu( 'primary' ); ?>

	<div id="main">

		<div class="main-inner">

			<div class="main-wrap">

				<main <?php hybrid_attr( 'content' ); ?>>

						<div class="content-entry-wrap tribe-events-content-entry-wrap">

							<div id="tribe-events-pg-template">
								<?php tribe_events_before_html(); ?>
								<?php tribe_get_view(); ?>
								<?php tribe_events_after_html(); ?>
							</div> <!-- #tribe-events-pg-template -->

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