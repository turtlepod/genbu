<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="entry-footer">
			<?php edit_post_link(); ?>
			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<?php tamatebako_entry_permalink(); ?>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
			</div><!-- .entry-byline -->
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->
