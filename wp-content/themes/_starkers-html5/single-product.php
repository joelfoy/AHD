<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */

get_header(); ?>

	<?php get_sidebar('productlist'); ?>

	<?php 
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

	<?php echo $term; ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<?php if ( has_post_thumbnail()) { // Logo Image ?>
			<div class="product-logo">
				<?php the_post_thumbnail('logo'); ?>
			</div>
			<?php } ?>
			
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			
			
		</article>
		<div class="clearfix"></div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>