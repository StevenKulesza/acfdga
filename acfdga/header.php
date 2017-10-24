<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
	      content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
	<?php get_template_part( 'partials/list', 'schema' ); ?>
	<?php get_template_part( 'partials/list', 'fonts' ); ?>
	<?php get_template_part('styles'); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<div id="bar-hello" class="bar" style="background: #ED1B2E;">
		<div class="container-fluid">
			<div class="text-center">
				<i class="fa fa-plus-circle" aria-hidden="true" style="color:#fff"></i> <a href="http://www.acfdga.com/socks-of-love/">Help us help hurricane harvey victims</a> <i class="fa fa-plus-circle" aria-hidden="true" style="color:#fff"></i>
			</div>
		</div>
	</div>
		
	
	<?php get_template_part( 'partials/list', 'modals' ); ?>

	<?php if (get_theme_mod ( 'themeslug_bar_hello_on') == 'value1'  ) : ?>
		<?php get_template_part( 'partials/bar', 'hello' ); ?>
	<?php endif; ?>

	<?php if (get_theme_mod ( 'themeslug_nav_top_on') == 'value1'  ) : ?>
		<?php get_template_part( 'partials/nav', 'top' ); ?>
	<?php endif; ?>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar site-navigation navbar-toggleable-md" itemscope="itemscope"
		     itemtype="http://schema.org/SiteNavigationElement">

				<!-- Logo Left, Nav Right -->
				<?php if (get_theme_mod('themeslug_logo_position') == 'value1') { ?>
					<?php get_template_part( 'partials/logo', 'left-nav-right' ); ?>

				<!-- Logo Right, Nav Left -->
				<?php } elseif (get_theme_mod('themeslug_logo_position') == 'value2') { ?>
					<?php get_template_part( 'partials/logo', 'right-nav-left' ); ?>

				<!-- Logo Above, Nav Below -->
				<?php } elseif (get_theme_mod('themeslug_logo_position') == 'value3') { ?>
					<?php get_template_part( 'partials/logo', 'above-nav-below' ); ?>

				<!-- Logo Below, Nav Above -->
				<?php } elseif (get_theme_mod('themeslug_logo_position') == 'value4') { ?>
					<?php get_template_part( 'partials/logo', 'below-nav-above' ); ?>
				<?php } ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
	
	<!--<div id="sub-nav" class="hidden-md-down">
		<div class="container-fluid">
			<div class="row">
			  <div class="col-lg-4">
					<a href="<?php bloginfo('url'); ?>/reviews" title="See What Our Patients are Saying!">
						Read Our<br /> Patient Reviews  <i class="fa fa-long-arrow-right"></i>
					</a>
			  </div>
			  <div class="col-lg-4" style="background: rgba(255, 255, 255, 0.1);">
					<a href="<?php bloginfo('url'); ?>/meet-dr-jordan" title="Learn More about Dr. Jeff Jordan">
						Meet<br /> Dr. Jordan  <i class="fa fa-long-arrow-right"></i>
					</a>
			  </div>
			  <div class="col-lg-4" style="background: rgba(255, 255, 255, 0.2);">
					<a href="<?php bloginfo('url'); ?>/contact" style="color: #fff;" title="Schedule Your Appointment Now">
						Request an<br /> Appointment  <i class="fa fa-long-arrow-right"></i>
					</a>
			  </div>
			</div>
		</div>
	</div><!-- /#sub-nav -->
	
	<div id="main-content">
		
		<?php if (!is_page('reviews')) : ?>
			<?php if (get_theme_mod ( 'themeslug_bar_reviews_on') == 'value1'  ) : ?>
				<?php get_template_part( 'partials/bar', 'reviews' ); ?>
			<?php endif; ?>	
		<?php endif; ?>
