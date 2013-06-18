<?php

/* ========================================================================

	DEFINE BASE LINKS
	
===========================================================================*/

if( ! defined('CSC_BASE' ) ) 
{ define( 'CSC_BASE', get_template_directory().'/' ); }

if( ! defined('CSC_BASE_URL' ) ) 
{ define( 'CSC_BASE_URL', get_template_directory_uri().'/' ); }

if( ! defined('CSC_BASE_CSS' ) ) 
{ define( 'CSC_BASE_CSS', get_stylesheet_directory_uri().'/' ); }
 


/* ========================================================================

	Setup Rexå
	
===========================================================================*/
function rex_setup() {
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'rex' ) );
	register_nav_menu( 'about', __( 'About Menu', 'rex' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'rex' ) );
	register_nav_menu( 'features', __( 'Features', 'rex' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'rex' ) );
	
	register_nav_menu( 'footer-seo-links', __( 'Footer SEO Links', 'rex' ) );


	// custom image size for featured images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
	
	add_image_size('client-logo', 220, 80, true);
	
	add_image_size('testimonials', 300, 180, true);
	
	
}
add_action( 'after_setup_theme', 'rex_setup' );

/* ========================================================================

	Enqueues scripts and styles for front-end  
	
===========================================================================*/
function rex_scripts_styles() {
	global $wp_styles;

	// Load JS
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		
		wp_register_script('plugins', get_stylesheet_directory_uri() . '/js/plugins.js', 'jquery', '1.0', true);
		wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', 'jquery', '1.0', true);
		
		//load in header				
				
		//load in footer
		wp_enqueue_script('jquery' );
		wp_enqueue_script('plugins' );
		wp_enqueue_script('scripts' );
		
		/*
		 * Adds JavaScript to pages with the comment form to support
		 * sites with threaded comments (when in use).
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '1.0' );
	wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', '1.0' );
	wp_enqueue_style( 'rex-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'rex-ie', get_template_directory_uri() . '/css/ie.css', array( 'rex-style' ), '20121010' );
	$wp_styles->add_data( 'rex-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'rex_scripts_styles' );

require_once(get_template_directory() . '/shortcodes/columns.php');
require_once(get_template_directory() . '/shortcodes/misk.php');
require_once(get_template_directory() . '/shortcodes/icon_fa.php');
require_once(get_template_directory() . '/shortcodes/columns-t.php');
require_once(get_template_directory() . '/shortcodes/shortcode-t.php');
require_once(get_template_directory() . '/shortcodes/icon-fa-t.php');

/* ========================================================================

	RANDOM FUNCTIONS
	
===========================================================================*/

/** Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link. **/
function rex_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'rex_page_menu_args' );


/** Extends the default WordPress body class to denote **/

function rex_body_class( $classes ) {
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'rex-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'rex_body_class' );


/** Limits word count use echo content(200) **/
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/** Displays navigation to next/previous pages when applicable. **/
if ( ! function_exists( 'rex_content_nav' ) ) :
function rex_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'rex' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'rex' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'rex' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;


/** ================== PAGENAVI Override ================== **/

//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
  
//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';
  
    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li><span",$out);  
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);
  
    return '<div class="pagination pagination-centered">
            <ul>'.$out.'</ul>
        </div>';
}


/** ================== Add page slug to body class ================== **/

function purpose_body_class( $classes ) {
	
	global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
	
	if ( ! is_page('home') ){
		$classes[] = 'internal';
	}

	return $classes;
}
add_filter( 'body_class', 'purpose_body_class' );


/* ========================================================================

	SIDEBAR WIDGETS 
	
===========================================================================*/

function rex_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'rex' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'rex' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Articles', 'rex' ),
		'id' => 'articles',
		'description' => __( 'Sidebar for articles', 'rex' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Features', 'rex' ),
		'id' => 'features',
		'description' => __( 'Appears when using the Features Sub Page Template', 'rex' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'rex_widgets_init' );


/* ========================================================================

	COMMENTING
	
===========================================================================*/

if ( ! function_exists( 'rex_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own rex_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function rex_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'rex' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'rex' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'rex' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'rex' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'rex' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'rex' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'rex' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;


/* ========================================================================

	ENTRY META DATA
	
===========================================================================*/
if ( ! function_exists( 'rex_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own rex_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function rex_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'rex' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'rex' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'rex' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'rex' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'rex' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'rex' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/* ========================================================================

	CUSTOM POST TYPES 
	
===========================================================================*/






/* ========================================================================

	TINYMCE STYLES 
	
===========================================================================*/

/**
 * Apply styles to the visual editor
 */  
add_filter('mce_css', 'tuts_mcekit_editor_style');
function tuts_mcekit_editor_style($url) {

    if ( !empty($url) )
        $url .= ',';

    // Retrieves the plugin directory URL
    // Change the path here if using different directories
    $url .= trailingslashit( plugin_dir_url(__FILE__) ) . '/editor-styles.css';

    return $url;
}

/**
 * Add "Styles" drop-down
 */ 
add_filter( 'mce_buttons_2', 'tuts_mce_editor_buttons' );

function tuts_mce_editor_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

/**
 * Add styles/classes to the "Styles" drop-down
 */ 
add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );

function tuts_mce_before_init( $settings ) {

    $style_formats = array(
		 array(
            'title' => 'table',
            'selector' => 'table',
            'classes' => 'table'
            ),
        array(
            'title' => 'Download Link',
            'selector' => 'a',
            'classes' => 'download'
            ),
        array(
            'title' => 'Testimonial',
            'selector' => 'p',
            'classes' => 'testimonial',
        ),
        array(
            'title' => 'Warning Box',
            'block' => 'div',
            'classes' => 'warning box',
            'wrapper' => true
        ),
        array(
            'title' => 'Red Uppercase Text',
            'inline' => 'span',
            'styles' => array(
                'color' => '#ff0000',
                'fontWeight' => 'bold',
                'textTransform' => 'uppercase'
            )
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}

/* Learn TinyMCE style format options at http://www.tinymce.com/wiki.php/Configuration:formats */

/*
 * Add custom stylesheet to the website front-end with hook 'wp_enqueue_scripts'
 */
add_action('wp_enqueue_scripts', 'tuts_mcekit_editor_enqueue');

/*
 * Enqueue stylesheet, if it exists.
 */
function tuts_mcekit_editor_enqueue() {
  $StyleUrl = plugin_dir_url(__FILE__).'editor-styles.css'; // Customstyle.css is relative to the current file
  wp_enqueue_style( 'myCustomStyles', $StyleUrl );
}


// Add custom CTA styles to TinyMCE editor
if ( ! function_exists('tdav_css') ) {
	function tdav_css($wp) {
		$wp .= ',' . get_bloginfo('stylesheet_directory') . '/css/tinymce.css';
		return $wp;
	}
}
add_filter( 'mce_css', 'tdav_css' );



