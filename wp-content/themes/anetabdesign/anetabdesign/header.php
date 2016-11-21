<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anetabdesign
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(is_front_page()): ?>

	<div id="slideshow">
	   <div style="background: url(https://static.pexels.com/photos/6548/cold-snow-winter-mountain.jpeg); background-size: cover;">
	   </div>
	   <div style="background: url(https://wallpaperscraft.com/image/smoke_fire_bright_colorful_background_46862_1680x1050.jpg); background-size: cover;">
	   </div>
	</div>

<?php else: ?>
	<div id="slideshowStatic">
	   <div style="background: url(<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_post_thumbnail_url(); ?><?php endwhile; else: ?><?php https://static.pexels.com/photos/6548/cold-snow-winter-mountain.jpeg ?><?php endif; ?>); background-size: cover;">
	   </div>
	</div>

<?php endif; ?>

<div id="slideshowOverlay">
	<div class="container col-xs-12">
	  <div class="jumbotron col-xs-12 col-sm-7 col-md-5">
		<h1>Aneta Burkiewicz</h1>
		<p>Graphic designer and calligrapher</p>
	  </div>
	</div>
</div>

<div id="slideshowColorOverlay"></div>

<nav class="navbar navbar-default" id="mainNav" role="navigation">

		 <div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
		  </button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="main-navbar-collapse">

						<?php
							$defaults = array(
								'container' => false,
								'theme_location' => 'primary',
								'menu_class' => 'nav navbar-nav'
							);

							wp_nav_menu($defaults);
						?>
				</div>
</nav>



<div id="site">
	<div id="content" class="col-xs-12">
