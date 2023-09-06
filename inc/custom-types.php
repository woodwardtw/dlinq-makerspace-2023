<?php
/**
 * UnderStrap custom post types and taxonomies
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//tool custom post type

// Register Custom Post Type tool
// Post Type Key: tool

function create_tool_cpt() {

  $labels = array(
    'name' => __( 'Tools', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Tool', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Tool', 'textdomain' ),
    'name_admin_bar' => __( 'Tool', 'textdomain' ),
    'archives' => __( 'Tool Archives', 'textdomain' ),
    'attributes' => __( 'Tool Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Tool:', 'textdomain' ),
    'all_items' => __( 'All Tools', 'textdomain' ),
    'add_new_item' => __( 'Add New Tool', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Tool', 'textdomain' ),
    'edit_item' => __( 'Edit Tool', 'textdomain' ),
    'update_item' => __( 'Update Tool', 'textdomain' ),
    'view_item' => __( 'View Tool', 'textdomain' ),
    'view_items' => __( 'View Tools', 'textdomain' ),
    'search_items' => __( 'Search Tools', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into tool', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this tool', 'textdomain' ),
    'items_list' => __( 'Tool list', 'textdomain' ),
    'items_list_navigation' => __( 'Tool list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Tool list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'tool', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-admin-tools',
  );
  register_post_type( 'tool', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_tool_cpt', 0 );



//maker custom post type

// Register Custom Post Type maker
// Post Type Key: maker

function create_maker_cpt() {

  $labels = array(
    'name' => __( 'Makers', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Maker', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Maker', 'textdomain' ),
    'name_admin_bar' => __( 'Maker', 'textdomain' ),
    'archives' => __( 'Maker Archives', 'textdomain' ),
    'attributes' => __( 'Maker Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Maker:', 'textdomain' ),
    'all_items' => __( 'All Makers', 'textdomain' ),
    'add_new_item' => __( 'Add New Maker', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Maker', 'textdomain' ),
    'edit_item' => __( 'Edit Maker', 'textdomain' ),
    'update_item' => __( 'Update Maker', 'textdomain' ),
    'view_item' => __( 'View Maker', 'textdomain' ),
    'view_items' => __( 'View Makers', 'textdomain' ),
    'search_items' => __( 'Search Makers', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into maker', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this maker', 'textdomain' ),
    'items_list' => __( 'Maker list', 'textdomain' ),
    'items_list_navigation' => __( 'Maker list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Maker list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'maker', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'maker', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_maker_cpt', 0 );