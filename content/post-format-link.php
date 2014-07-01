<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div class="entry-header">

			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a class="format-link-title" href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<?php tamatebako_entry_permalink(); ?>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
			</div><!-- .entry-byline -->

			<?php edit_post_link(); ?>

		</div><!-- .entry-header -->

		<?php if ( has_excerpt() ) { // If the post has an excerpt. ?>

			<div <?php hybrid_attr( 'entry-summary' ); ?>>
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } // end excerpt check ?>

	</div><!-- .entry-wrap -->

</article><!-- .entry -->
