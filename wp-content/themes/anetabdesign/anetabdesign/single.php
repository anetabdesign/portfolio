<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anetabdesign
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main padding-bottom-xs-xl" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <h2 class="col-xs-12 col-sm-4 margin-top-xs-s"><?php the_title(); ?></h2>
			 <div class="col-xs-12 col-sm-8 margin-bottom-xs-xl"><?php the_content(); ?></div>

			<?php

			$images = get_field('project_gallery');

			if( $images ): ?>
				<ul>
					<?php foreach( $images as $image ): ?>
						<li>
								 <img class="padding-top-xs-l padding-bottom-xs-l" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							<p><?php echo $image['caption']; ?></p>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>



		<?php endwhile; else: ?>
			<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
