<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta">';
					if ( is_single() ) :
						twentyseventeen_posted_on();
					else :
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
					endif;
				echo '</div><!-- .entry-meta -->';
			endif;

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>

		<?php echo get_post_meta( get_the_ID(), 'sub-title', true ); ?>

	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<p class="categories">
        <?php
        $categories = get_the_category();

        $cats = '';

        foreach ($categories as $cat) {
            $cats .= "<a href='" . get_category_link($cat) ."'>" . $cat->name . " </a>";
        }

        echo 'Category: ' . $cats;
        ?>
    </p>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
?>
	<p><?php wc_price(get_post_meta($post->ID, "price", true))?></p>

	<?php if (!is_user_logged_in()) { ?>
        <a href="/wp-login.php?action=register" class="add_favourit_link">Add to favourites</a>
        <?php } else { ?>
        <button class="add_favourite" data-id="<?php echo $post->ID; ?>">Add to favourites</button>
    <?php } ?>

	<a class="add_to_cart_film" href="/wp-content/themes/twentyseventeen/add_to_cart_film.php?film=<?=$post->ID?>">Buy</a>
<?
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>

	<p></p>
	</div><!-- .entry-content -->
	<div style="clear:both;"></div>
	<?php if ( is_single() ) : ?>
		<?php twentyseventeen_entry_footer(); ?>
	<?php endif; ?>

</article><!-- #post-## -->
