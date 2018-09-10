<?php

// ativando menus dinamicos
function register_my_menus() {
	register_nav_menus([
		'header-menu' => __('Menu principal'),
	]);
}
add_action('init', 'register_my_menus');