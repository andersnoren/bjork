<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function bjork_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'bjork_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function bjork_styles() {
	wp_enqueue_style( 'bjork-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'bjork' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bjork_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function bjork_register_block_patterns() {

	if ( ! function_exists( 'register_block_pattern_category' ) ) return;

	// The block pattern categories included in Björk.
	$bjork_block_pattern_categories = apply_filters( 'bjork_block_pattern_categories', array(
		'bjork-blog'  => array(
			'label'			=> esc_html__( 'Björk Blog', 'bjork' ),
		),
		'bjork-cta'  => array(
			'label'			=> esc_html__( 'Björk Call to Action', 'bjork' ),
		),
		'bjork-general' => array(
			'label'			=> esc_html__( 'Björk General', 'bjork' ),
		),
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $bjork_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $bjork_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'bjork_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'bjork_register_block_styles' ) ) :
	function bjork_register_block_styles() {

		if ( ! function_exists( 'register_block_style' ) ) return;

		// Separator: Angled Separator
		register_block_style( 'core/separator', array(
			'name'  	=> 'bjork-angled-separator',
			'label' 	=> esc_html__( 'Angled', 'bjork' ),
		) );

		// Separator: Angled Separator Wide
		register_block_style( 'core/separator', array(
			'name'  	=> 'bjork-angled-separator-wide',
			'label' 	=> esc_html__( 'Angled Wide', 'bjork' ),
		) );
		
	}
	add_action( 'init', 'bjork_register_block_styles' );
endif;
