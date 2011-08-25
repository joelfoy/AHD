<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */

automatic_feed_links();
add_theme_support('post-thumbnails');

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
<?php 
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

?>