<?php
if ( !defined('ABSPATH') ) { die('-1'); }
$img = get_template_directory_uri() . '/docs/flexslider-examples/images/';
?>
<h1>Carousel Slider</h1>
<div id="slider-content" class="flexslider carousel">
	<ul class="slides">
		<li>
			<a href="#blue"><img src="<?php echo $img . 'blue.jpg'; ?>"></a>
		</li>
		<li>
			<a href="#green"><img src="<?php echo $img . 'green.jpg'; ?>"></a>
		</li>
		<li>
			<a href="#red"><img src="<?php echo $img . 'red.jpg'; ?>"></a>
		</li>
		<li>
			<a href="#white"><img src="<?php echo $img . 'white.jpg'; ?>"></a>
		</li>
		<li>
			<a href="#yellow"><img src="<?php echo $img . 'yellow.jpg'; ?>"></a>
		</li>
	</ul>
</div>