<header <?php hybrid_attr( 'header' ); ?>>

	<?php if ( current_theme_supports( 'custom-header' ) && get_header_image() ) { /* Custom Header */ ?>

		<?php if ( display_header_text() ){ /* Using Header Text, use image as banner */ ?>

			<div id="branding">

				<?php hybrid_site_title(); ?>
				<?php hybrid_site_description(); ?>

			</div><!-- #branding -->

			<div id="header-image-banner">
				<img class="header-image" src="<?php header_image(); ?>" alt="<?php esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php esc_attr( get_bloginfo( 'name' ) ); ?>"/>
			</div>

		<?php } else { /* No Header Text, use as logo */ ?>

				<div id="branding">
					<h1 id="site-logo"><a href="<?php echo home_url(); ?>" rel="home"><img class="header-image" src="<?php header_image(); ?>" alt="<?php esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php esc_attr( get_bloginfo( 'name' ) ); ?>"/></a></h1>
				</div><!-- #branding -->

		<?php } /* End Header Text Check */ ?>

	<?php } else { /* No Custom Header, always display default header */ ?>

		<div id="branding">

			<?php hybrid_site_title(); ?>
			<?php hybrid_site_description(); ?>

		</div><!-- #branding -->

	<?php } /* End Custom Header Check */ ?>

</header><!-- #header-->