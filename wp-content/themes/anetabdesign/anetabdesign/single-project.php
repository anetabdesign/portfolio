<?php
/**
*Template Name: Project
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		
		
		<?php if ( have_posts() ) : while( have_posts() ): the_post(); ?>

			<?php the_title(); ?>
			
			<?php the_title(); ?>
			
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
			
		<?php endif;?>
		

	
	</div><!-- #primary -->

<?php
get_footer();
