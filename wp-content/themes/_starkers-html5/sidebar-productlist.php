<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */
?>
	<aside role="secondary-navigation" id="products-sidebar">
		<nav id="sidebar-site-nav">
			<?php
			 if (function_exists('wp_nav_menu')):
			 	wp_nav_menu(
			 		array(
			 		'menu' => 'Products Menu', 
			 		'container' => '',
			 		'depth' => 1,
			 		'menu_id' => 'products-navigation'
			 		)
			 	);
			 else:
			 ?>
			 <p>No Menu</p>
			<?php
			 endif;
			?>
			
		</nav>
	</aside>