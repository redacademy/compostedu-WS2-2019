<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function adult_workshops_post_type() {

	$labels = array(
		'name'                  => _x( 'Adult Workshops', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adult Workshop', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adult Workshops', 'text_domain' ),
		'name_admin_bar'        => __( 'Adult Workshop', 'text_domain' ),
		'archives'              => __( 'Adult Workshop Archives', 'text_domain' ),
		'attributes'            => __( 'Adult Workshop Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Adult Workshop:', 'text_domain' ),
		'all_items'             => __( 'All Adult Workshops', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adult Workshop', 'text_domain' ),
		'add_new'               => __( 'New Adult Workshop', 'text_domain' ),
		'new_item'              => __( 'New Adult Workshop', 'text_domain' ),
		'edit_item'             => __( 'Edit Adult Workshop', 'text_domain' ),
		'update_item'           => __( 'Update Adult Workshop', 'text_domain' ),
		'view_item'             => __( 'View Adult Workshop', 'text_domain' ),
		'view_items'            => __( 'View Adult Workshops', 'text_domain' ),
		'search_items'          => __( 'Search Adult Workshops', 'text_domain' ),
		'not_found'             => __( 'No Adult Workshops found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Adult Workshops found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adult Workshop', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adult Workshop', 'text_domain' ),
		'items_list'            => __( 'Adult Workshops list', 'text_domain' ),
		'items_list_navigation' => __( 'Adult Workshops list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Adult Workshops list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adult Workshop', 'text_domain' ),
		'description'           => __( 'Adult Workshops information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports' 				=> array( 'title','editor'),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'public' 				=> true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'adult_workshop', $args );

}
add_action( 'init', 'adult_workshops_post_type', 0 );

// Register Custom Post Type
function community_workshops_post_type() {

	$labels = array(
		'name'                  => _x( 'Community Workshops', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Community Workshop', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Community Workshops', 'text_domain' ),
		'name_admin_bar'        => __( 'Community Workshop', 'text_domain' ),
		'archives'              => __( 'Community Workshop Archives', 'text_domain' ),
		'attributes'            => __( 'Community Workshop Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Community Workshop:', 'text_domain' ),
		'all_items'             => __( 'All Community Workshops', 'text_domain' ),
		'add_new_item'          => __( 'Add New Community Workshop', 'text_domain' ),
		'add_new'               => __( 'New Community Workshop', 'text_domain' ),
		'new_item'              => __( 'New Community Workshop', 'text_domain' ),
		'edit_item'             => __( 'Edit Community Workshop', 'text_domain' ),
		'update_item'           => __( 'Update Community Workshop', 'text_domain' ),
		'view_item'             => __( 'View Community Workshop', 'text_domain' ),
		'view_items'            => __( 'View Community Workshops', 'text_domain' ),
		'search_items'          => __( 'Search Community Workshops', 'text_domain' ),
		'not_found'             => __( 'No Community Workshops found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Community Workshops found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Community Workshop', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Community Workshop', 'text_domain' ),
		'items_list'            => __( 'Community Workshops list', 'text_domain' ),
		'items_list_navigation' => __( 'Community Workshops list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Community Workshops list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Community Workshop', 'text_domain' ),
		'description'           => __( 'Community Workshops information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'community_workshop', $args );

}
add_action( 'init', 'community_workshops_post_type', 0 );

// Register Custom Post Type
function composting_for_kids_post_type() {

	$labels = array(
		'name'                  => _x( 'Composting for Kids', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Composting for Kids', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Composting for Kids', 'text_domain' ),
		'name_admin_bar'        => __( 'Composting for Kids', 'text_domain' ),
		'archives'              => __( 'Composting for Kids Archives', 'text_domain' ),
		'attributes'            => __( 'Composting for Kids Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Composting for Kids:', 'text_domain' ),
		'all_items'             => __( 'All Composting for Kids', 'text_domain' ),
		'add_new_item'          => __( 'Add New Composting for Kids', 'text_domain' ),
		'add_new'               => __( 'New Composting for Kids', 'text_domain' ),
		'new_item'              => __( 'New Composting for Kids', 'text_domain' ),
		'edit_item'             => __( 'Edit Composting for Kids', 'text_domain' ),
		'update_item'           => __( 'Update Composting for Kids', 'text_domain' ),
		'view_item'             => __( 'View Composting for Kids', 'text_domain' ),
		'view_items'            => __( 'View Composting for Kids', 'text_domain' ),
		'search_items'          => __( 'Search Composting for Kids', 'text_domain' ),
		'not_found'             => __( 'No Composting for Kids found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Composting for Kids found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Composting for Kids', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Composting for Kids', 'text_domain' ),
		'items_list'            => __( 'Composting for Kids list', 'text_domain' ),
		'items_list_navigation' => __( 'Composting for Kids list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Composting for Kids list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Composting for Kids', 'text_domain' ),
		'description'           => __( 'Composting for Kids information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'composting_for_kids', $args );

}
add_action( 'init', 'composting_for_kids_post_type', 0 );

// Register Custom Post Type
function intermediate_program_post_type() {

	$labels = array(
		'name'                  => _x( 'Intermediate programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Intermediate program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Intermediate programs', 'text_domain' ),
		'name_admin_bar'        => __( 'Intermediate program', 'text_domain' ),
		'archives'              => __( 'Intermediate program Archives', 'text_domain' ),
		'attributes'            => __( 'Intermediate program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Intermediate program:', 'text_domain' ),
		'all_items'             => __( 'All Intermediate programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Intermediate program', 'text_domain' ),
		'add_new'               => __( 'New Intermediate program', 'text_domain' ),
		'new_item'              => __( 'New Intermediate program', 'text_domain' ),
		'edit_item'             => __( 'Edit Intermediate program', 'text_domain' ),
		'update_item'           => __( 'Update Intermediate program', 'text_domain' ),
		'view_item'             => __( 'View Intermediate program', 'text_domain' ),
		'view_items'            => __( 'View Intermediate programs', 'text_domain' ),
		'search_items'          => __( 'Search Intermediate programs', 'text_domain' ),
		'not_found'             => __( 'No Intermediate programs found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Intermediate programs found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Intermediate program', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Intermediate program', 'text_domain' ),
		'items_list'            => __( 'Intermediate programs list', 'text_domain' ),
		'items_list_navigation' => __( 'Intermediate programs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Intermediate programs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Intermediate program', 'text_domain' ),
		'description'           => __( 'Intermediate program information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'intermediate_program', $args );

}
add_action( 'init', 'intermediate_program_post_type', 0 );

// Register Custom Post Type
function high_school_program_post_type() {

	$labels = array(
		'name'                  => _x( 'High school programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'High school program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'High school programs', 'text_domain' ),
		'name_admin_bar'        => __( 'High school program', 'text_domain' ),
		'archives'              => __( 'High school program Archives', 'text_domain' ),
		'attributes'            => __( 'High school program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent High school program:', 'text_domain' ),
		'all_items'             => __( 'All High school programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New High school program', 'text_domain' ),
		'add_new'               => __( 'New High school program', 'text_domain' ),
		'new_item'              => __( 'New High school program', 'text_domain' ),
		'edit_item'             => __( 'Edit High school program', 'text_domain' ),
		'update_item'           => __( 'Update High school program', 'text_domain' ),
		'view_item'             => __( 'View High school program', 'text_domain' ),
		'view_items'            => __( 'View High school programs', 'text_domain' ),
		'search_items'          => __( 'Search High school programs', 'text_domain' ),
		'not_found'             => __( 'No High school programs found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No High school programs found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into High school program', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this High school program', 'text_domain' ),
		'items_list'            => __( 'High school programs list', 'text_domain' ),
		'items_list_navigation' => __( 'High school programs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter High school programs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'High school program', 'text_domain' ),
		'description'           => __( 'High school program information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'high_school_program', $args );

}
add_action( 'init', 'high_school_program_post_type', 0 );

// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Product Archives', 'text_domain' ),
		'attributes'            => __( 'Product Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'New Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Products', 'text_domain' ),
		'search_items'          => __( 'Search Products', 'text_domain' ),
		'not_found'             => __( 'No Products found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Products found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'text_domain' ),
		'items_list'            => __( 'Products list', 'text_domain' ),
		'items_list_navigation' => __( 'Products list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'Product Taxonomies' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'products_post_type', 0 );

// Register Custom Post Type
function people_post_type() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'People', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'People', 'text_domain' ),
		'name_admin_bar'        => __( 'People', 'text_domain' ),
		'archives'              => __( 'People Archives', 'text_domain' ),
		'attributes'            => __( 'People Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent People:', 'text_domain' ),
		'all_items'             => __( 'All People', 'text_domain' ),
		'add_new_item'          => __( 'Add New People', 'text_domain' ),
		'add_new'               => __( 'New People', 'text_domain' ),
		'new_item'              => __( 'New People', 'text_domain' ),
		'edit_item'             => __( 'Edit People', 'text_domain' ),
		'update_item'           => __( 'Update People', 'text_domain' ),
		'view_item'             => __( 'View People', 'text_domain' ),
		'view_items'            => __( 'View People', 'text_domain' ),
		'search_items'          => __( 'Search People', 'text_domain' ),
		'not_found'             => __( 'No People found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No People found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into People', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this People', 'text_domain' ),
		'items_list'            => __( 'People list', 'text_domain' ),
		'items_list_navigation' => __( 'People list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter People list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'People', 'text_domain' ),
		'description'           => __( 'People information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'People Terms' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template_lock'         => 'all'
	);
	register_post_type( 'people', $args );

}
add_action( 'init', 'people_post_type', 0 );