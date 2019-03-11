<?php
function my_style_load() {
 $theme_uri = get_template_directory_uri();
 wp_register_style('my_theme_style', $theme_uri.'/css/style.css', false, '0.1');
 wp_enqueue_style('my_theme_style');
	wp_register_style('fonts_style', $theme_uri.'/fonts/stylesheet.css', false, '0.1');
	wp_register_style('gallery', $theme_uri.'/css/justifiedGallery.min.css', false, '0.1');
	wp_enqueue_style('fonts_style');
	wp_enqueue_style('gallery');	
}

add_action('wp_enqueue_scripts', 'my_style_load');
function enqueue_scripts () {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_register_script('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js');
	wp_enqueue_script('uikit');
	wp_register_script('uikit-icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js');
	wp_enqueue_script('uikit-icons');
	$theme_uri = get_template_directory_uri();
	wp_register_script('gallery-js', $theme_uri.'/js/jquery.justifiedGallery.min.js');
	wp_enqueue_script('gallery-js');
		wp_register_script('ajax', $theme_uri.'/js/ajax.js');
	wp_enqueue_script('ajax');
	wp_register_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js');
	wp_enqueue_script('tweenmax');
	wp_register_script('touchswipe', $theme_uri.'/js/jquery.touchSwipe.min.js');
	wp_enqueue_script('touchswipe');
		wp_register_script('detect', $theme_uri.'/js/detect.js');
	wp_enqueue_script('detect');
		wp_register_script('carousel', $theme_uri.'/js/carousel.js');
	wp_enqueue_script('carousel');
		wp_register_script('main', $theme_uri.'/js/main.js');
	wp_enqueue_script('main');
	

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' ); // для всех типов постов
set_post_thumbnail_size(640, 640);
}

?>