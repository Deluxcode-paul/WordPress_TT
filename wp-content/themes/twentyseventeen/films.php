<?php
/**
 * Template Name: Home
 */
get_header(); ?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php $query = new WP_Query( 'post_type=film' ); ?>
	 		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php get_template_part( 'template-parts/post/content-films', get_post_format() );?>

				<br/>
				<hr>
				<br/>

	 		<?php endwhile; 
	 		wp_reset_postdata();
	 		else : ?>
	 			<?php get_template_part( 'template-parts/post/content-none', get_post_format() );?>
	 		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->
<?php
get_footer();