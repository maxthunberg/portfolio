<?php
declare(strict_types=1);

function add_excerpt_support_projects() {
	add_post_type_support( 'post', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_projects' );

function remove_excerpt_support_projects() {
	remove_post_type_support( 'post', 'editor' );
}
add_action( 'init', 'remove_excerpt_support_projects' );


// Register News custom post type.
require get_template_directory().'/post-types/projects.php';

// Removes editor in custom post "Projects"
add_action('init', 'init_remove_support',100);

function init_remove_support(){
    remove_post_type_support( 'projects', 'editor');
}
 add_action('wp_enqueue_scripts', function () {

	$version = '3.1.46';

  	wp_deregister_script('jquery');

  	// wp_register_script('external-scripts', get_template_directory_uri() . '/js/scripts/external-scripts.min.js',false, $version,'all');
  	// wp_enqueue_script('external-scripts');

  	// wp_register_script('script-main', get_template_directory_uri() . '/js/components/script.js',false, $version,'all');
  	// wp_enqueue_script('script-main');

	wp_enqueue_style( 'styles', get_template_directory_uri() . '/scss/globals/scss/styles.css',false, $version,'all');

  	wp_register_script('script', get_template_directory_uri() . '/js/script.min.js',false, $version,'all');
  	wp_enqueue_script('script');

});


// To be able to add thumbnail images
add_theme_support( 'post-thumbnails' );

// Options page ACF
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
	remove_filter ('acf_the_content', 'wpautop', 20);
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

// Set limit for excerpts

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

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

function get_excerpt($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'<div class="blog-read-more"><a class="read-more" href="'.$permalink.'">LÄS MER</a></div>';
    return $excerpt;
}

function get_excerpt_no_read_more($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt."....";
    return $excerpt;
}
function get_title_excerpt_no_read_more($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_title();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt;
    return $excerpt;
}


// REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS


// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');
// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');
// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}


add_action('init', 'df_disable_comments_admin_bar');







function theme_enqueue_scripts() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/ajax-script.js', array('jquery'), null, true );
    wp_localize_script( 'ajax-script', 'ajax_script_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        )
    );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

// add_action( 'wp_ajax_ajax_append_carousel', 'ajax_append_carousel' );
// add_action( 'wp_ajax_nopriv_ajax_append_carousel', 'ajax_append_carousel' );

// function ajax_append_carousel() {

// 		echo include( get_template_directory() . '/ajax_append_carousel.php');

// 		wp_reset_postdata();

// 			die();

// }

// add_action( 'wp_ajax_ajax_append_grid_mode', 'ajax_append_grid_mode' );
// add_action( 'wp_ajax_nopriv_ajax_append_grid_mode', 'ajax_append_grid_mode' );

// function ajax_append_grid_mode() {

// 		echo include( get_template_directory() . '/ajax_append_grid_mode.php');

// 		wp_reset_postdata();

// 			die();

// }

// Remove all unnecessary markup in head-tag

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head','rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action( 'wp_head', 'wp_resource_hints', 2 );


// Cloudinary Images
function add_image($image, $params, $class, $alt) {
	$base = 'https://res.cloudinary.com/maxthunberg-com/image/upload/';
	$filename = $image['filename'];

	if (	$params === 0 ) {
		$params = 'g_south,q_70,c_fill,w_1280';
	}
	if (	$class === 0 ) {
		$class = '';
	}
	if (	$alt === 0 ) {
		$alt = '';
	}

	$output = $base.$params.'/'.$filename;

	echo '<img src="' . @$output . '" class="' . @$class . '" alt="' . @$alt . '" />';
}

function add_bg_image($image, $params) {

	$base = 'https://res.cloudinary.com/maxthunberg-com/image/upload/';
	$filename = $image['filename'];

	if (	$params === 0 ) {
		$params = 'g_south,q_70,c_fill,w_1280';
	}

	$output = $base.$params.'/'.$filename;

	echo @$output;

}

function add_thumbnail_image($params, $class) {

	$imgname = get_the_post_thumbnail_url();
	$base = 'https://res.cloudinary.com/maxthunberg-com/image/upload/';
	if (	$params === 0 ) {
		$params = 'g_south,q_70,c_fill,w_1280';
	}
	if (strpos($imgname, $base) === 0) {
		$imgname = substr($imgname, strlen($base));
		}

	$output = $base.$params.'/'.$imgname;

	echo '<img src="' . @$output . '" class="' . @$class . '" />';

}

function add_icon($name) {

	$src = get_template_directory_uri() . '/' . 'icons/' . $name . '.svg';

	$result = file_get_contents($src);

	echo $result;
}

// add_action( 'after_setup_theme', 'theme_setup' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}


//removes wp-toolbar
add_filter('show_admin_bar', '__return_false');
