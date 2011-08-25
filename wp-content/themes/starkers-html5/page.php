<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php if(is_page('home')) { ?>
		
		<div id="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo bloginfo('url').'/wp-content/images/nivo-images/'?>leader.png" alt="" title="#htmlcaption" />
                <a href="http://dev7studios.com"><img src="<?php echo bloginfo('url').'/wp-content/images/nivo-images/'?>leader2.png" alt="" title="This is an example of a caption" /></a>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
            	<?php // This is where you list captions ?>
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
        
		<?php } ?> 
		
		<?php if(is_page('products'))	{ ?>
		<?php 
		// Get Products by Supplement Type
		$args = array(
		  'taxonomy'     => 'supplement_type',
		  'orderby'      => 'name',
		  'show_count'   => 0,
		  'pad_counts'   => 0,
		  'hierarchical' => 1,
		  'title_li'     => ''
		); ?>
		
		<?php wp_list_categories($args); ?>
		<h4>TEST LIST</h4>
		<?php } ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>