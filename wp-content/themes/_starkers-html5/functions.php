<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */
 
 // FEATURED IMAGE SUPPORT
if ( function_exists( 'add_theme_support' ) ) {  
    add_theme_support( 'post-thumbnails' );  
    set_post_thumbnail_size( 250, 250, true ); // Normal post thumbnails  
    add_image_size( 'screen-shot', 400, 400 ); // Full size screen  
    add_image_size( 'half-pic', 460, 400); // Half Column Size
    add_image_size( 'third-pic', 294, 120, true ); // Third Column Size
    add_image_size( 'quarter-pic', 211, 100, true); // Quarter Column Size
}

function cs_image( $atts, );

automatic_feed_links();

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'blog-sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'footer-sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'product-list',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'health-category',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

// Custom Navigation
add_action('init', 'register_custom_menu');

add_theme_support('menus');

function register_custom_menu() {
register_nav_menu('primary_menu', __('Main Navigation'));
register_nav_menu('products_menu', __('Products Menu'));
}



/**
 * Conditional Page/Post Navigation Links
 * http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

	add_action('init', 'product_register');
	function product_register() {
    	$args = array(
        	'label' => __('Products'),
        	'singular_label' => __('Product'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
        	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes')
        );
    	register_post_type( 'product' , $args );
	}
	register_taxonomy("supplement-type", array("product"), array("hierarchical" => true, "label" => "Supplement Type", "singular_label" => "Supplement Type", "rewrite" => true));  


// SHORTCODES

// Style Shortcodes
// Paragraph Column Styles

function cs_one_quarter( $atts, $content = null ) {
	return '<div class="one-quarter-width">'.$content.'</div>'; 
}
add_shortcode('one_quarter','cs_one_quarter');

function cs_one_quarter_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="one-quarter-width last">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="one-quarter-width last">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('one_quarter_last','cs_one_quarter_last');

function cs_one_third( $atts, $content = null ) {
	return '<div class="one-third-width">'.$content.'</div>';
}
add_shortcode('one_third','cs_one_third');

function cs_one_third_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="one-third-width last">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="one-third-width last">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('one_third_last','cs_one_third_last');

function cs_one_half( $atts, $content = null ) {
	return '<div class="one-half-width">'.$content.'</div>';
}
add_shortcode('one_half','cs_one_half');

function cs_one_half_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="one-half-width last">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="one-half-width last">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('one_half_last','cs_one_half_last');

function cs_two_thirds( $atts, $content = null ) {
	return '<div class="two-thirds-width">'.$content.'</div>';
}
add_shortcode('two_thirds','cs_two_thirds');

function cs_two_thirds_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="two-thirds-width last">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="two-thirds-width last">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('two_thirds_last','cs_two_thirds_last');

function cs_three_quarter( $atts, $content = null ) {
	return '<div class="three-quarter-width">'.$content.'</div>';
}
add_shortcode('three_quarter','cs_three_quarter');

function cs_three_quarter_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="three-quarter-width last">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="three-quarter-width last">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('three_quarter_last','cs_three_quarter_last');

function cs_full( $atts, $content = null) {
	extract( shortcode_atts( array(
			'space' => '',
		), $atts ) );
		if ($space == 'yes') {
	return '<div class="full">'.$content.'</div><div class="clearfix space"></div>';
	} else {
	return '<div class="full">'.$content.'</div><div class="clearfix"></div>';
	}
}
add_shortcode('full','cs_full');

function cs_section_header( $atts, $content = null) {
	return '<div class="section-header"><h2>'.$content.'</h2></div><hr>';
}
add_shortcode('section_header','cs_section_header');

// This is the new comment markup - edit as you feel necessary
function html5_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <article <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
      
      <header class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      
      </header>
      
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><time datetime="<?php the_time('Y-m-d') ?>" pubdate><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> </div>
<?php
        }

// Changes the trailing </li> into a trailing </article>
function close_comment() {?>
	</article>
<?php
}
?>
