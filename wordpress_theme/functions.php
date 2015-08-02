<?php 
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus();
	
	if ( function_exists( 'add_theme_support' ) ) {
    	add_theme_support( 'post-thumbnails' );
	}
	//add post thumbnails
	if ( function_exists( 'add_theme_support' ) ) {
	    add_theme_support( 'post-thumbnails' );
	}
	if ( function_exists( 'add_image_size' ) ) {
	    add_image_size( 'post-thumb', 353, 275 );
	}
	
	
	/*
	Plugin Name: 获取 WordPress 特色图片地址
	Plugin URI:  http://blog.wpjam.com/m/get_post_thumbnail_url/
	Description: 获取 WordPress 特色图片地址。
	Version: 0.1
	Author: Denis
	Author URI: http://blog.wpjam.com/
	*/
	function get_post_thumbnail_url($post_id){
		$post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
		$thumbnail_id = get_post_thumbnail_id($post_id);
		if($thumbnail_id ){
			$thumb = wp_get_attachment_image_src($thumbnail_id, 'full');
			return $thumb[0];
		}else{
			return false;
		}
	}