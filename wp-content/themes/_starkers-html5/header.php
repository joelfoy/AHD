<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo('charset'); ?>" />

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
     Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<!-- wordpress head -->
<?php wp_head(); ?>
<!-- /wordpress head -->

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php echo bloginfo('template_url'); ?>/js/modernizr-1.5.min.js"></script>

</head>

<body <?php body_class(); ?>>

<!-- Begin PAGE Wrapper -->
<div id="page-wrapper">
	
	<!-- Begin Content Wrapper -->
	<div id="content-wrapper">
	<header>
		<div id="logo"><a href="<?php echo bloginfo('url') ?>"><img src="<?php echo bloginfo('url').'/wp-content/images/AHD-logo.png' ?>" /></a></div>
		<?php //Main Navigation ?>
		<nav id="site-nav">
			<?php
			 if (function_exists('wp_nav_menu')):
			 	wp_nav_menu(
			 		array(
			 		'menu' => 'primary_menu', 
			 		'container' => '',
			 		'depth' => 1,
			 		'menu_id' => 'main-navigation'
			 		)
			 	);
			 else:
			 ?>
			 <ul id="main-navigation">
			 	<?php wp_list_pages('title_li=&depth=1'); ?>
			 </ul>
			 <?php
			 endif;
			?>
			
		</nav>
	</header>
	