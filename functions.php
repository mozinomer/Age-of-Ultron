<?php 




function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );




function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


function testimonials() {
    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __( 'testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
 
        )
    );
}

add_action( 'init', 'testimonials' );