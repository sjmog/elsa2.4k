<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
    - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here
/*
2. lib/enqueue-sass.php or enqueue-css.php
    - enqueueing scripts & styles for Sass OR CSS
    - please use either Sass OR CSS, having two enabled will ruin your weekend
*/
require_once('lib/enqueue-sass.php'); // do all the cleaning and enqueue if you Sass to customize Reverie
//require_once('lib/enqueue-css.php'); // to use CSS for customization, uncomment this line and comment the above Sass line
/*
3. lib/foundation.php
	- add pagination
	- custom walker for top-bar and related
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

/**********************
Add theme supports
**********************/
function reverie_theme_support() {
	// Add language supports.
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie'),
		'utility' => __('Utility Navigation', 'reverie')
	));
	
	// Add custom background support
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',  // background image default
	    'default-color' => '', // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
	echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
	echo '<p class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}
// Register Custom Post Types: 0) personal posts

add_action( 'init', 'register_cpt_personal_post' );

function register_cpt_personal_post() {

    $labels = array( 
        'name' => _x( 'Personal posts', 'personal_post' ),
        'singular_name' => _x( 'Personal post', 'personal_post' ),
        'add_new' => _x( 'Add New', 'personal_post' ),
        'add_new_item' => _x( 'Add New Personal post', 'personal_post' ),
        'edit_item' => _x( 'Edit Personal post', 'personal_post' ),
        'new_item' => _x( 'New Personal post', 'personal_post' ),
        'view_item' => _x( 'View Personal post', 'personal_post' ),
        'search_items' => _x( 'Search Personal posts', 'personal_post' ),
        'not_found' => _x( 'No personal posts found', 'personal_post' ),
        'not_found_in_trash' => _x( 'No personal posts found in Trash', 'personal_post' ),
        'parent_item_colon' => _x( 'Parent Personal post:', 'personal_post' ),
        'menu_name' => _x( 'Personal posts', 'personal_post' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Elsa\'s personal posts.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'personal_post', $args );

}

// and 1) testimonials

function hc_testimonial_post_type() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Testimonials', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'text_domain' ),
		'all_items'           => __( 'All Testimonials', 'text_domain' ),
		'view_item'           => __( 'ViewTestimonial', 'text_domain' ),
		'add_new_item'        => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'             => __( 'New Testimonial', 'text_domain' ),
		'edit_item'           => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'         => __( 'Update Testimonial', 'text_domain' ),
		'search_items'        => __( 'Search Testimonials', 'text_domain' ),
		'not_found'           => __( 'No testimonials found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No testimonials found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'testimonial', 'text_domain' ),
		'description'         => __( 'Testimonials', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => get_template_directory_uri() . "/img/icons/admin/testimonials.png",
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $args );

}
// and 2) Sponsor posts

add_action( 'init', 'register_cpt_sponsor_post' );

function register_cpt_sponsor_post() {

    $labels = array( 
        'name' => _x( 'Sponsor posts', 'sponsor_post' ),
        'singular_name' => _x( 'Sponsor post', 'sponsor_post' ),
        'add_new' => _x( 'Add New', 'sponsor_post' ),
        'add_new_item' => _x( 'Add New Sponsor post', 'sponsor_post' ),
        'edit_item' => _x( 'Edit Sponsor post', 'sponsor_post' ),
        'new_item' => _x( 'New Sponsor post', 'sponsor_post' ),
        'view_item' => _x( 'View Sponsor post', 'sponsor_post' ),

        'search_items' => _x( 'Search Sponsor posts', 'sponsor_post' ),
        'not_found' => _x( 'No sponsor posts found', 'sponsor_post' ),
        'not_found_in_trash' => _x( 'No sponsor posts found in Trash', 'sponsor_post' ),
        'parent_item_colon' => _x( 'Parent Sponsor post:', 'sponsor_post' ),
        'menu_name' => _x( 'Sponsor posts', 'sponsor_post' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Posts by Sponsors.',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . "/img/icons/admin/sponsors.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'sponsor_post', $args );

}

//and 3) organiser posts

add_action( 'init', 'register_cpt_organiser_post' );

function register_cpt_organiser_post() {

    $labels = array( 
        'name' => _x( 'Organiser posts', 'organiser_post' ),
        'singular_name' => _x( 'Organiser post', 'organiser_post' ),
        'add_new' => _x( 'Add New', 'organiser_post' ),
        'add_new_item' => _x( 'Add New Organiser post', 'organiser_post' ),
        'edit_item' => _x( 'Edit Organiser post', 'organiser_post' ),
        'new_item' => _x( 'New Organiser post', 'organiser_post' ),
        'view_item' => _x( 'View Organiser post', 'organiser_post' ),

        'search_items' => _x( 'Search Organiser posts', 'organiser_post' ),
        'not_found' => _x( 'No Organiser posts found', 'organiser_post' ),
        'not_found_in_trash' => _x( 'No Organiser posts found in Trash', 'organiser_post' ),
        'parent_item_colon' => _x( 'Parent Organiser post:', 'organiser_post' ),
        'menu_name' => _x( 'Organiser posts', 'organiser_post' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Posts by Organisers.',
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','revisions','thumbnail','author','page-attributes','post-formats'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . "/img/icons/admin/great_pacific_race.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'organiser_post', $args );

}

//extend page functionality to include general title, subtitle etc.

add_action( 'init', 'register_taxonomy_subtitles' );

function register_taxonomy_subtitles() {

    $labels = array( 
        'name' => _x( 'Subtitles', 'subtitles' ),
        'singular_name' => _x( 'Subtitle', 'subtitles' ),
        'search_items' => _x( 'Search Subtitles', 'subtitles' ),
        'popular_items' => _x( 'Popular Subtitles', 'subtitles' ),
        'all_items' => _x( 'All Subtitles', 'subtitles' ),
        'parent_item' => _x( 'Parent Subtitle', 'subtitles' ),
        'parent_item_colon' => _x( 'Parent Subtitle:', 'subtitles' ),
        'edit_item' => _x( 'Edit Subtitle', 'subtitles' ),
        'update_item' => _x( 'Update Subtitle', 'subtitles' ),
        'add_new_item' => _x( 'Add New Subtitle', 'subtitles' ),
        'new_item_name' => _x( 'New Subtitle', 'subtitles' ),
        'separate_items_with_commas' => _x( 'Separate subtitles with commas', 'subtitles' ),
        'add_or_remove_items' => _x( 'Add or remove Subtitles', 'subtitles' ),
        'choose_from_most_used' => _x( 'Choose from most used Subtitles', 'subtitles' ),
        'menu_name' => _x( 'Subtitles', 'subtitles' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'subtitles', array('page'), $args );
}

// Hook into the 'init' action
add_action( 'init', 'hc_testimonial_post_type', 0 );

?>