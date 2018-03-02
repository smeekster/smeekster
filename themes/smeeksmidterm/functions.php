<?php
function smeeksmidterm_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'smeeksmidterm-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'smeeksmidterm_scripts' );

 
function smeeksmidterm_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Primary sidebar', 'smeeeksmidterm' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'smeeeksmidterm' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
    ) );
    
}
add_action( 'widgets_init', 'smeeksmidterm_sidebar' );
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
 }
 add_action( 'init', 'register_my_menu' );
 //////////// Customizer ///////////////////////

