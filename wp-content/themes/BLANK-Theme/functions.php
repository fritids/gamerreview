<?php

	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}

    add_filter( 'wpmem_login_form', 'remove_wpmem_txt' );
    add_filter( 'wpmem_register_form', 'remove_wpmem_txt' );
   
    function remove_wpmem_txt( $form ) {
       $old = array( '[wpmem_txt]', '[/wpmem_txt]' );
       $new = array( '', '' );
       return str_replace( $old, $new, $form );
    }
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    // Change Excerpt Length

    function custom_excerpt_length( $length ) {
    return 100;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    // Change excerpt more filter

    function new_excerpt_more( $more ) {
    return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    //get recent articles
    function get_related_author_posts() {
      global $authordata, $post;
   
      $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 2 ) );
   
      $output = '<ul>';
      foreach ( $authors_posts as $authors_post ) {
          $output .= '<li>';
          $output .= '<h3>' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</h3>';
          $output .= '<p>' . get_the_excerpt() . '</p>';
          $output .= '<p><a href="' . get_permalink( $authors_post->ID ) . '">Read More</a></p></li>';
          $output .= '</li>';
      }
      $output .= '</ul>';
   
      return $output;
  }

  //Redirect to home on log in
   add_action('wp_logout','go_home');
    function go_home(){
    wp_redirect( home_url() );
    exit();
  }

    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                main_nav => 'Main Navigation Menu'
                )
            );
    }

?>