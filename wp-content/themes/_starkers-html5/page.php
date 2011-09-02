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
                <a href="#"><img src="<?php echo bloginfo('url').'/wp-content/images/nivo-images/'?>leader2.png" alt="" title="This is an example of a caption" /></a>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
            	<?php // This is where you list captions ?>
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
        <!-- Preview Tabs -->
        <section id="preview-tabs"><?php // Product Preview Tabs ?>
        
        <ul class="tabs">
        	<li><a href="#luralean"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/luralean-158.png" /></a></li>
        	<li><a href="#bellalean"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/" /></a></li>
        	<li><a href="#allerol"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/" /></a></li>
        	<li><a href="#luravida"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/luravida-158.png" /></a></li>
        	<li><a href="#aidorin"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/aidorin-158.png" /></a></li>
        	<li><a href="#unolex"><img alt="" class="" src="<?php echo do_shortcode('[images_url]'); ?>logos/unolex-158.png" /></a></li>
        </ul>
        
        <div class="tab-container clearfix">
        	<div id="luralean" class="tab-content"><? // Tab1 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>LuraLean</h3>
        			<p>LuraLean&trade; (Propol Mannan) is the satiety-support ingredient that helps maintain post-meal GI and cholesterol levels already within the normal range. It has the highest molecular weight in the natural world.</p>
        			<ul>
        				<li>Supports immune system*</li>
						<li>Relief of occational constipation*</li>
						<li>Helps maintain cholesterol levels already within the normal range*</li>
						<li>Weight Reduction*</li>
						<li>Body Fat Reduction*</li>
						<li>Probiotics*</li>
        			</ul>
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=91 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
        	<div id="bellalean" class="tab-content"><? // Tab2 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>Bellalean</h3>	
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=113 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
        	<div id="allerol" class="tab-content"><? // Tab3 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>Allerol</h3>
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=115 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
        	<div id="luravida" class="tab-content"><? // Tab4 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>Luravida</h3>
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=117 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
        	<div id="aidorin" class="tab-content"><? // Tab5 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>Aidorin</h3>
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=1 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
        	<div id="unolex" class="tab-content"><? // Tab6 ?>
        		<img alt="" src="<?php echo do_shortcode('[images_url]'); ?>" class="tab-photo" id="" />
        		<section class="preview-description">
        			<h3>Unolex</h3>
        			<p>AHD and their partnering company Fytexia&reg; presents a new active ingredient unolex&reg;, a dry extract of Mangosteen (Garcinia mangostana L.) dosed at 10% in alphamangostin. Scientifically proven in double blind placebo controlled study, unolex&reg; reduces joint pain in seniors (-50%) and athletes (-31%).</p>
        		</section>
        		<div class="more-links">
        			<?php echo do_shortcode('[see_more id=1 text="See More Now"]'); ?>
        			<?php echo do_shortcode('[see_more id=# text="Get a Quote"]'); ?>
        		</div> 
        		
        	</div>
         	
        </div>
        
        
        </section>
        
        <!-- end Preview Tabs -->
        
		<?php } // End Home Page Specific Code ?> 
		
		
		
		<?php if(!is_page('home')){ ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			
		</article>
		
		<?php } ?>
		
		<?php endwhile; endif; ?>
	

<?php get_footer(); ?>