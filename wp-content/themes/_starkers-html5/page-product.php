<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<h2>What type of product are you looking for?</h2>
<?php if(is_page('products'))	{ ?>
	<?php 
	// Get Products by Supplement Type
	$args = array(
	  'taxonomy'     => 'supplement-type',
	  'orderby'      => 'name',
	  'show_count'   => 0,
	  'pad_counts'   => 0,
	  'hierarchical' => 1,
	  'title_li'     => ''
	); ?>
	<ul>
		<?php wp_list_categories($args); ?>
	</ul>
</article>	
<div class="clearfix"></div>

<?php } // End Supplement List ?>

		
<?php get_footer(); ?>