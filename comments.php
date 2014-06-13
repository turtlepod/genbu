<?php
/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<section id="comments-template">

	<?php if ( have_comments() ) : // Check if there are any comments. ?>

		<div id="comments">

			<div class="comments-header">

				<?php if ( get_option( 'page_comments' ) && 1 < get_comment_pages_count() ) : // Check for paged comments. ?>

					<div class="comments-nav">

						<?php previous_comments_link( '<span class="prev-comments"></span>' ); ?>

						<span class="page-numbers"><?php printf( '%1$s / %2$s', get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1, get_comment_pages_count() ); ?></span>

						<?php next_comments_link( '<span class="next-comments"></span>' ); ?>

					</div><!-- .comments-nav -->

				<?php endif; // End check for paged comments. ?>

				<h3 id="comments-number"><?php comments_number(); ?></h3>

			</div>

			<ol class="comment-list">
				<?php wp_list_comments(
					array(
						'callback'     => 'hybrid_comments_callback',
						'end-callback' => 'hybrid_comments_end_callback'
					)
				); ?>
			</ol><!-- .comment-list -->

		</div><!-- #comments-->

	<?php endif; // End check for comments. ?>

	<?php tamatebako_comments_error(); ?>

	<?php comment_form(); // Loads the comment form. ?>

</section><!-- #comments-template -->