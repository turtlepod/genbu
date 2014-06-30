<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div class="entry-header">
			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
		</div><!-- .entry-header -->

		<div class="entry-media">
			<?php get_the_image( array( 'size' => 'full', 'link_to_post' => false, 'caption' => true, 'order' => array( 'featured' ) ) ); ?>
		</div>

		<div <?php hybrid_attr( 'entry-summary' ); ?>>
			<?php the_excerpt(); ?>
			<?php tamatebako_read_more(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_terms(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->