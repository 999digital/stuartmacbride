<?php
/**
 * Stuartmacbride Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stuartmacbride Child Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_STUARTMACBRIDE_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'stuartmacbride-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_STUARTMACBRIDE_CHILD_THEME_VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



/**
 * Enqueue WordPress theme styles within Gutenberg.
 */
function organic_origin_gutenberg_styles() {
	wp_enqueue_style( 'organic-origin-gutenberg', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_STUARTMACBRIDE_CHILD_THEME_VERSION, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'organic_origin_gutenberg_styles' );






/**
 * Enqueue theme block editor scripts.
*/
function rich_block_editor_scripts() {
	wp_enqueue_script( 'rich-editor', get_theme_file_uri( '/assets/js/block-styles.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'rich_block_editor_scripts' );



/**
 * Disable ‘UAG  Templates’ button from all post, pages and other post types. 
 * https://ultimategutenberg.com/docs/remove-uag-templates-button/
 */
add_filter( 'ast_block_templates_disable', '__return_true' );




// Add this as plugin !!!!!!!!!!!!!!!
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'sticky-nav',
            'title'             => __('Sticky Nav'),
            'description'       => __('Sticki Navigation for blocks.'),
            'icon'              => 'admin-links',
            'render_template'   => 'components/blocks/sticky nav/sticky-nav.php',
            'category'          => 'formatting',
            'supports'          => array( 
                'multiple' => false,
                'align' => false,    
            ),
            // 'example'           => array(
            //     'attributes' => array(
            //         'mode' => 'preview',
            //         'data' => array(
            //             'testimonial'   => "Blocks are...",
            //             'author'        => "Jane Smith",
            //             'role'          => "Person",
            //             'is_preview'    => true
            //         )
            //     )
            // )
        ));
    }
}

