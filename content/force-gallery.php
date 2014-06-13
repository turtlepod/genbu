<article <?php hybrid_attr( 'post' ); ?>>

	<div class="display-gallery-thumb">
		<img class="thumbnail" src="<?php echo get_template_directory_uri() . '/images/display-gallery-thumb.jpg';?>">
	</div>

	<div class="entry-wrap">

		<div class="entry-header">
			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
		</div><!-- .entry-header -->

	</div><!-- .entry-wrap -->
</article><!-- .entry -->