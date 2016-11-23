<?php
/*
Template Name: Home Page
*/

get_header(); 
?>

<div id="primary" class="content-area col-xs-12 padding-bottom-xs-xl">

		<?php $loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<a>
				<div class="thumbnailLink col-xs-12 col-sm-6 col-lg-4">
				<div class="parent " onclick="">
					<div class="child" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				</div>
			<a/>

		<?php endwhile; wp_reset_query(); ?>

	</div><!-- #primary -->

<?php

get_footer();

