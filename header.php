<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Indieweb Publisher
 * @since   Indieweb Publisher 1.0
 */
?><!DOCTYPE html>
<html <?php indieweb_publisher_html_tag_schema(); ?> <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<?php // Displays full-width featured image on Single Posts if applicable ?>
<?php indieweb_publisher_full_width_featured_image(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

		<div class="site-header-info">
				<?php // Show Header Image, Site Title, and Site Tagline on everything except Single Pages ?>
				<?php indieweb_publisher_site_info(); ?>
		</div>

<!-- Show H-card -->
		<div class="vcard" style="display: none">
			<img style="float: right; margin-left: 5px" src="https://secure.gravatar.com/avatar/ae0d61ecec9ba68060523144917aed32" alt="Frank Meeuwsen" class="photo"/>
			<span class="fn n">
				<span class="given-name">Frank</span>  	
				<span class="family-name">Meeuwsen</span>
			</span>
			<div class="url u-url u-uid" rel="me">https://diggingthedigital.com/</div>
			<p class="p-note">Digging the digital</p>
		</div>

		<?php // Show navigation menu on everything except Single pages, unless Show Primary Nav Menu on Single Pages is enabled ?>
		<!-- <?php if ( ! is_single() || indieweb_publisher_option( 'show_nav_on_single' ) ) : ?>
			<nav role="navigation" class="site-navigation main-navigation">
				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'indieweb-publisher' ); ?>"><?php _e( 'Skip to content', 'indieweb-publisher' ); ?></a>

				<?php if ( is_single() && has_nav_menu( 'single' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'single',
							'depth'          => 1,
						)
					);
					?>
				<?php else : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'depth'          => 1,
						)
					);
					?>
				<?php endif; ?>

			</nav>
		<?php endif; ?>  -->

		<?php do_action( 'indieweb_publisher_header_after' ); ?>
	</header>
	<!-- #masthead .site-header -->

	<div id="main" class="site-main">
