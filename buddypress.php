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

					<?php if ( have_posts() ){ /* Posts Found */ ?>

						<div class="content-entry-wrap">

							<?php while ( have_posts() ) {  /* Start Loop */ ?>

								<?php the_post(); /* Load Post Data */ ?>

								<?php /* Start Content */ ?>
								<article <?php hybrid_attr( 'post' ); ?>>

									<div class="entry-wrap">

										<header class="entry-header">
											<?php the_title( '<h1 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h1>' ); ?>
										</header><!-- .entry-header -->

										<div <?php hybrid_attr( 'entry-content' ); ?>>
											<?php the_content(); ?>
										</div><!-- .entry-content -->

									</div><!-- .entry-wrap -->

								</article><!-- .entry -->
								<?php /* End Content */ ?>

							<?php } /* End Loop */ ?>

						</div><!-- .content-entry-wrap-->

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