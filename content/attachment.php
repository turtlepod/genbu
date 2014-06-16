<article <?php hybrid_attr( 'post' ); ?>>

	<?php if ( is_attachment() ) : // If viewing a single attachment. ?>

		<div class="entry-wrap">

			<header class="entry-header">
				<?php the_title( '<h1 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php hybrid_attachment(); // Function for handling non-image attachments. ?>
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php edit_post_link(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- .entry-wrap -->

	<?php else : // If not viewing a single attachment. ?>

		<div class="entry-wrap">

			<div class="entry-header">
				<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
			</div><!-- .entry-header -->

			<div <?php hybrid_attr( 'entry-summary' ); ?>>
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		</div><!-- .entry-wrap -->

	<?php endif; // End single attachment check. ?>

</article><!-- .entry -->