<?php
function smeeksmidterm_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'smeeksmidterm-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'smeeksmidterm_scripts' );

 
function smeeksmidterm_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'smeeeksmidterm' ),
        'id'            => 'sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'smeeeksmidterm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
}
add_action( 'widgets_init', 'smeeksmidterm_widgets_init' );
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
 }
 add_action( 'init', 'register_my_menu' );
 //////////// Customizer ///////////////////////

