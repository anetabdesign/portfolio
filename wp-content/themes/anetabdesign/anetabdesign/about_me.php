<?php
/**
Template Name: About me
 */

get_header(); ?>

	<div id="primary" class="content-area">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				 <h4 class="col-xs-12 col-sm-4 margin-top-xs-s"><?php the_title(); ?></h4>
				 <div class="col-xs-12 col-sm-8 margin-bottom-xs-xl"><?php the_content(); ?></div>

	</div><!-- #primary -->
	<?php
get_footer();
