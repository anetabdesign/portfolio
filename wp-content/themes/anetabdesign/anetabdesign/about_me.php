<?php
/**
 * This is template for displaying About.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anetabdesign
 */

get_header(); ?>

	<div id="primary" class="content-area">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				 <h4 class="col-xs-12 col-sm-4 margin-top-xs-s"><?php the_title(); ?></h4>
				 <div class="col-xs-12 col-sm-8 margin-bottom-xs-xl"><?php the_content(); ?></div>

	</div><!-- #primary -->
	<?php
get_footer();
