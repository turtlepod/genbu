<?php
if ( !defined('ABSPATH') ) { die('-1'); }
$img = get_template_directory_uri() . '/docs/flexslider-examples/images/';
?>
<h1>Slider With Thumbnail Navigation</h1>
<div id="slider-content" class="flexslider thumbnav">
	<ul class="slides">
		<?php /* Use thumbnail image in "data-thumb" */ ?>
		<li data-thumb="<?php echo $img . 'blue.jpg'; ?>">
			<article>
				<?php /* use full size/larger image in actual content */ ?>
				<img src="<?php echo $img . 'blue.jpg'; ?>">
				<h1>Lorem ipsum dolor sit amet</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor quam. Vestibulum aliquet, diam eget dignissim vehicula, sapien sapien tempor velit, a ultrices tellus turpis nec nunc. Duis porta dapibus ligula vel semper.</p>
			</article>
		</li>
		<li data-thumb="<?php echo $img . 'green.jpg'; ?>">
			<article>
				<img src="<?php echo $img . 'green.jpg'; ?>">
				<h1>Quisque gravida</h1>
				<p>Quisque gravida, nunc nec consectetur tempus, massa augue facilisis quam, a ultrices felis orci lacinia justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse a ultrices felis. Sed mollis pharetra tortor condimentum congue.</p>
			</article>
		</li>
		<li data-thumb="<?php echo $img . 'red.jpg'; ?>">
			<article>
				<img src="<?php echo $img . 'red.jpg'; ?>">
				<h1>Nam luctus ante at mauris</h1>
				<p>Nam luctus ante at mauris sagittis mattis congue orci ornare. Vivamus diam nulla, placerat eu convallis cursus, gravida eget elit. Morbi tortor leo, molestie quis vehicula a, dignissim blandit nulla. </p>
			</article>
		</li>
		<li data-thumb="<?php echo $img . 'yellow.jpg'; ?>">
			<article>
				<img src="<?php echo $img . 'yellow.jpg'; ?>">
				<h1>Quisque gravida</h1>
				<p>Quisque gravida, nunc nec consectetur tempus, massa augue facilisis quam, a ultrices felis orci lacinia justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse a ultrices felis. Sed mollis pharetra tortor condimentum congue.</p>
			</article>
		</li>
	</ul>
</div>