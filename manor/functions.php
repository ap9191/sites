<?php
function my_style_load() {
 $theme_uri = get_template_directory_uri();
 wp_register_style('my_theme_style', $theme_uri.'/css/style.css', false, '0.1');
 wp_enqueue_style('my_theme_style');
	wp_register_style('fonts_style', $theme_uri.'/fonts/stylesheet.css', false, '0.1');
	wp_register_style('datepicker', $theme_uri.'/css/datepicker.min.css', false, '0.1');
	wp_enqueue_style('fonts_style');
	wp_enqueue_style('datepicker');
wp_register_style('pay-style', 'https://securepayments.sberbank.ru/payment/docsite/_prod/assets/css/modal.css');
wp_enqueue_style('pay-style');	
}

add_action('wp_enqueue_scripts', 'my_style_load');
function enqueue_scripts () {
	wp_register_script('jquery', 'http://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('jquery');
	wp_register_script('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js');
	wp_enqueue_script('uikit');
	wp_register_script('uikit-icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js');
	wp_enqueue_script('uikit-icons');
	wp_register_script('payment', 'https://securepayments.sberbank.ru/payment/docsite/_prod/assets/js/ipay.js');
	wp_enqueue_script('payment');
	$theme_uri = get_template_directory_uri();
	wp_register_script('datepicker-js', $theme_uri.'/js/datepicker.min.js');
	wp_enqueue_script('datepicker-js');
	wp_register_script('wide-js', $theme_uri.'/js/ajax.js');
	wp_enqueue_script('wide-js');
	wp_register_script('swipe-js', $theme_uri.'/js/swipe.js');
	wp_enqueue_script('swipe-js');

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' ); // для всех типов постов
set_post_thumbnail_size(640, 640);
}

?>