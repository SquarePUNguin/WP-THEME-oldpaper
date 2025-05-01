<?php
if(! function_exists("theme_setup")){
	function theme_setup(){
		add_theme_support('custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
		'unlink-homepage-logo' => false,
		]);
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails',array("post","page","movie"));
	}
	add_action('after_setup_theme','theme_setup');
}
//места под выпадающие меню
function theme_menus(){
	$locations=array(
		"Header" => __('Header Menue','Theme'),
		"Footer" => __('Footer Menue',"Theme"),
	);
	register_nav_menus($locations);
}
add_action("init","theme_menus");
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment_reply' );
    }
}
add_action( 'comment_form_before', 'enqueue_comment_reply_script' );
function theme_scripts() {
	
	wp_enqueue_script( "jquery",true );
	wp_enqueue_style("maincss",get_stylesheet_uri(),array());
	wp_enqueue_script("mainjs",get_template_directory_uri()."/scripts/main.js",array("jquery"),true);
}
function enqueue_comment_reply() {
		wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );
?>
