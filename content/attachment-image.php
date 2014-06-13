<article <?php hybrid_attr( 'post' ); ?>>

	<?php if ( is_attachment() ) : // If viewing a single attachment. ?>

		<div class="entry-wrap">

			<header class="entry-header">

				<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>

			</header><!-- .entry-header -->

			<div <?php hybrid_attr( 'entry-content' ); ?>>

				<?php if ( has_excerpt() ) : // If the image has an excerpt/caption. ?>

					<?php $src = wp_get_attachment_image_src( get_the_ID(), 'full' ); ?>

					<?php echo img_caption_shortcode( array( 'align' => 'aligncenter', 'width' => esc_attr( $src[1] ), 'caption' => get_the_excerpt() ), wp_get_attachment_image( get_the_ID(), 'full', false ) ); ?>

				<?php else : // If the image doesn't have a caption. ?>

					<?php echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) ); ?>

				<?php endif; // End check for image caption. ?>

				<?php the_content(); ?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<?php edit_post_link(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- .entry-wrap -->

	<?php else : // If not viewing a single post. ?>

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