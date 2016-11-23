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

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php

			$images = get_field('slider_gallery');
			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					   <div style="background: url(<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>); background-size: cover;">
					   </div>
					<?php endforeach; ?>
			<?php endif; ?>



		<?php endwhile; else: ?>
			<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
		<?php endif; ?>
	</div>

<?php else: ?>
	<div id="slideshowStatic">
	   <div style="background: url(<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_post_thumbnail_url(); ?><?php endwhile; else: ?><?php https://static.pexels.com/photos/6548/cold-snow-winter-mountain.jpeg ?><?php endif; ?>); background-size: cover; background-position: center;">
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

<div id="site" style="background-image: url();">
	<div id="content" class="col-xs-12">
