<?php 

/*==================================================================================
Register color paette for guttenberg
==================================================================================*/
function ea_setup() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Light Blue', 'ea-starter' ),
			'slug'  => 'light-blue',
			'color'	=> '#35A0CD',
		),
		array(
			'name'  => __( 'Dark Blue', 'ea-starter' ),
			'slug'  => 'dark-blue',
			'color'	=> '#2D4B6F',
		),
		array(
			'name'  => __( 'Black', 'ea-starter' ),
			'slug'  => 'black',
			'color'	=> '#000000',
		),
		array(
			'name'  => __( 'White', 'ea-starter' ),
			'slug'  => 'white',
			'color' => '#FFFFFF',
		),
		array(
			'name'  => __( 'Light Grey', 'ea-starter' ),
			'slug'  => 'light-grey',
			'color' => '#F4F4F4',
		),
	) );
}
add_action( 'after_setup_theme', 'ea_setup' );

/*==================================================================================
Allow certain block on Guttenberg
==================================================================================*/
 
/* function misha_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/fd-greybgtext',
		'acf/fd-sharetitle',
		'acf/fd-bluebg',
		'acf/fd-button',
		'acf/fd-teamcard',
		'acf/fd-imagetext',
		'acf/mediatextareablock',
		'core/image',
		'core/separator',
		'core/spacer',
		'core/paragraph',
		'core/heading',
		'core/list'
	);
 
}

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );*/


/*==================================================================================
Wrap blocks in a div
==================================================================================*/
// add_filter( 'render_block', 'wrap_classic_block', 10, 2 );
// function wrap_classic_block( $block_content, $block ) {

//     $block_content = '<div class="content-block">' . $block_content . '</div>';
  
//   return $block_content;
// }