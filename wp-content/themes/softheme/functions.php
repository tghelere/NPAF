<?php
	// ativando menus dinamicos
	function register_my_menus() {
		register_nav_menus([
            'header-menu' => __('Menu principal'),
        ]);
	}
	add_action('init', 'register_my_menus');
	
	// // Meus posts types
	// function meus_posts_types() {
	// 	// Habilidades
	// 	register_post_type('habilidades',
	// 		array(
	// 			'labels'			=> array(
	// 				'name'			=> __('Habilidades'),
	// 				'singular_name' =>	__('Habilidade')
	// 				),
	// 			'public'			=> true,
	// 			'has_archive'		=> true,
	// 			'menu_icon'			=> 'dashicons-welcome-learn-more',
	// 			'supports'			=>	array('title', 'thumbnail', 'page-attributes'),
	// 			)
	// 	);
	// 	// Slide
	// 	register_post_type('slide',
	// 		array(
	// 			'labels'			=> array(
	// 				'name'			=> __('Slides'),
	// 				'singular_name' =>	__('Slide')
	// 				),
	// 			'public'			=> true,
	// 			'has_archive'		=> true,
	// 			'menu_icon'			=> 'dashicons-format-gallery',
	// 			'supports'			=>	array('title', 'editor', 'page-attributes'),
	// 			)
	// 	);

	// }
	// add_action('init', 'meus_posts_types');

	// // Tamanhos dinâmicos para thumbs
	// function tamanhos_thumbs() {
	// 	add_theme_support('post-thumbnails');
	// 	add_image_size('portfolio-thumb', 265, 150, true);
	// }
	// add_action('after_setup_theme', 'tamanhos_thumbs');