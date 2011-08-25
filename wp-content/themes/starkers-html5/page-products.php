<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>

<h2>This is the Products Template</h2>
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
	
	<?php wp_list_categories($args); ?>
	
	
<?php } // End Supplement List ?>

		
<?php get_footer(); ?>