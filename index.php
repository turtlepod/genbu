<?php get_header(); ?>

<div id="container">

	<?php tamatebako_skip_to_content(); ?>

	<?php get_template_part( 'site-header' ); ?>

	<?php hybrid_get_menu( 'primary' ); ?>

	<div id="main">

		<?php //hybrid_get_sidebar( 'secondary' ); ?>

		<div class="main-inner">

			<div class="main-wrap">

				<?php //hybrid_get_sidebar( 'primary' ); ?>

				<main <?php hybrid_attr( 'content' ); ?>>

					<?php if ( have_posts() ){ /* Posts Found */ ?>

						<?php tamatebako_archive_header(); ?>

						<div class="content-entry-wrap">

							<?php while ( have_posts() ) {  /* Start Loop */ ?>

								<?php the_post(); /* Load Post Data */ ?>

								<?php /* Start Content */ ?>
								<?php tamatebako_get_template( 'content' ); // Loads the content/*.php template. ?>
								<?php /* End Content */ ?>

							<?php } /* End Loop */ ?>

						</div><!-- .content-entry-wrap-->

						<?php tamatebako_archive_footer(); ?>

					<?php } else { /* No Posts Found */ ?>

						<?php tamatebako_content_error(); ?>

					<?php } /* End Posts Found Check */ ?>

				</main><!-- #content -->

				<?php hybrid_get_sidebar( 'primary' ); ?>

			</div><!-- .main-wrap -->

		</div><!-- .main-inner -->

		<?php hybrid_get_sidebar( 'secondary' ); ?>

	</div><!-- #main -->

	<?php get_template_part( 'site-footer' ); ?>

</div><!-- #container -->

<?php get_footer(); // Loads the footer.php template. ?>