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
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt(); ?>
			
			<?php 

			$images = get_field('project_gallery');

			if( $images ): ?>
				<ul>
					<?php foreach( $images as $image ): ?>
						<li>
							<a href="<?php echo $image['url']; ?>">
								 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
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
get_sidebar();
get_footer();
