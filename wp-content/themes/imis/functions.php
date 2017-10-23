<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){


	wp_register_script('materialize', get_bloginfo('template_url') . '/js/materialize.js', array('jquery'), false, true);
	wp_enqueue_script('materialize');

	wp_register_script('init', get_bloginfo('template_url') . '/js/init.js', array('jquery'), false, true);
	wp_enqueue_script('init');

	wp_register_script('slick', get_bloginfo('template_url') . '/js/slick.js', array('jquery'), false, true);
	wp_enqueue_script('slick');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('jquery'), false, true);
	wp_enqueue_script('global');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');

	wp_enqueue_style('slick', get_bloginfo('template_url') . '/css/slick.css');

	wp_enqueue_style('materialize', get_bloginfo('template_url') . '/css/materialize.css');

	wp_enqueue_style('style', get_bloginfo('template_url') . '/css/style.css');
}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );

update_option( 'siteurl', 'http://localhost/SourceXAMP/final-imis/imis' );
update_option( 'home', 'http://localhost/SourceXAMP/final-imis/imis' );