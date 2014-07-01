<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php if ( get_option( 'show_avatars' ) ) { ?>
				<a class="status-avatar" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ) ); ?></a>
			<?php } ?>
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="entry-footer">
			<?php edit_post_link(); ?>
			<div class="entry-byline">
				<?php hybrid_post_format_link(); ?>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
			</div><!-- .entry-byline -->
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php tamatebako_entry_nav(); ?>

<?php comments_template( '', true ); // Load comments. ?>