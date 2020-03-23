<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function enqueue_load_fa() {
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.10.1/css/all.css' );
}
  
add_action('wp_enqueue_scripts', 'enqueue_load_fa');

add_filter( 'rest_prepare_post', function( $response, $post, $request ) {
		// Only do this for single post requests.
		global $post;
		// Get the so-called next post.
		$next = get_adjacent_post( false, '', false );
		// Get the so-called previous post.
		$previous = get_adjacent_post( false, '', true );
		// Format them a bit and only send id and slug (or null, if there is no next/previous post).
		$response->data['next'] = ( is_a( $next, 'WP_Post') ) ? array( "id" => $next->ID, "slug" => $next->post_name ) : null;
		$response->data['previous'] = ( is_a( $previous, 'WP_Post') ) ? array( "id" => $previous->ID, "slug" => $previous->post_name ) : null;
  
	  return $response;
  }, 10, 3 );

  function red_starter_widgets_contactus_init() {
	register_sidebar( array(
		'name'          => esc_html( 'ContactUs' ),
		'id'            => 'contactus-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="contact-us-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_contactus_init' );
