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

<div class="slider">
	<ul class="bg-slideshow">
		<li>
			  <span class="image">Image 01</span>
			  <div>
				   <h3><span class="red">re</span>·lax</h3>
			</div>
		</li>
		<li>
		<span class="image">Image 02</span>
			  <div>
				   <h3>and <span class="red">go</span>..</h3>
			</div>
	  </li>
		<li>
		<span class="image">Image 03</span>
			  <div>
				   <h3>Fuck <span class="red">you</span>rself</h3>
			</div>
	  </li>
	</ul>
</div>

<nav class="navbar navbar-default" id="mainNav" role="navigation">

		 <div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
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



<div id="page" class="site container-fluid">
	<div id="content" class="site-content">
