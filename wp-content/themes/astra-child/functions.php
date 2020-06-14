<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version')
    );
}


add_action('acf/init', 'lil_define_block');
function lil_define_block() {
	
	// check function exists
	if( function_exists( 'acf_register_block' ) ) {
		
		// register a fun facts block
		acf_register_block(array(
			'name'				=> 'fun-facts',
			'title'				=> __( 'Fun Facts' ),
			'description'		=> __('A custom fun facts block.'),
			'render_callback'	=> 'lil_render_fun_facts_block',
			'category'			=> 'layout',
			'icon'				=> 'nametag',
			'keywords'			=> array( 'fun', 'facts', 'profiles', 'acf' ),
		));
	}
}
