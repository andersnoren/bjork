<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function bjork_setup() {

	add_theme_support( 'wp-block-styles' );

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
	Register theme specific block patterns.
--------------------------------------------------------------------------------------------------- */

function bjork_register_block_patterns() {

	if ( ! ( function_exists( 'register_block_pattern_category' ) && function_exists( 'register_block_pattern' ) ) ) return;

	// The block pattern categories included in Björk.
	$bjork_block_pattern_categories = apply_filters( 'bjork_block_pattern_categories', array(
		'bjork-blog' => array(
			'label'			=> esc_html__( 'Björk Blog', 'bjork' ),
		),
		'bjork-cta'  => array(
			'label'			=> esc_html__( 'Björk Call to Action', 'bjork' ),
		),
		'bjork-footer' => array(
			'label'			=> esc_html__( 'Björk Footer', 'bjork' ),
		),
		'bjork-general' => array(
			'label'			=> esc_html__( 'Björk General', 'bjork' ),
		),
		'bjork-header' => array(
			'label'			=> esc_html__( 'Björk Header', 'bjork' ),
		),
		'bjork-hero' => array(
			'label'			=> esc_html__( 'Björk Hero', 'bjork' ),
		),
		'bjork-portfolio' => array(
			'label'			=> esc_html__( 'Björk Portfolio', 'bjork' ),
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

	// viewportWidth values, determining the width of the preview in the Block Patterns drawer.
	$viewport = apply_filters( 'bjork_block_patterns_viewport', array(
		'full'			=> 1440,
		'wide'			=> 1312,
		'wide_grouped'	=> 1180,
		'content'		=> 640
	) );

	// The block patterns included in Björk.
	$bjork_block_patterns = apply_filters( 'bjork_block_patterns', array(

		/* BLOG */

		'bjork/blog-grid-cols-2' => array(
			'title'         => esc_html__( 'Two column grid with featured image, title, and post date', 'bjork' ),
			'categories'    => array( 'bjork-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'blog/blog-grid-cols-2' ),
		),
		'bjork/blog-grid-cols-3' => array(
			'title'         => esc_html__( 'Three column grid with featured image, title, and post date', 'bjork' ),
			'categories'    => array( 'bjork-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'blog/blog-grid-cols-3' ),
		),
		'bjork/blog-list-compact' => array(
			'title'         => esc_html__( 'Compact list with title and post date.', 'bjork' ),
			'categories'    => array( 'bjork-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'blog/blog-list-compact' ),
		),
		'bjork/blog-list-compact-media' => array(
			'title'         => esc_html__( 'Compact list with a featured image, title, and post date.', 'bjork' ),
			'categories'    => array( 'bjork-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'blog/blog-list-compact-media' ),
		),

		/* CALL TO ACTION */

		'bjork/cta-horizontal' => array(
			'title'         => esc_html__( 'Horizontal call to action.', 'bjork' ),
			'categories'    => array( 'bjork-cta' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'cta/cta-horizontal' ),
		),
		'bjork/cta-vertical' => array(
			'title'         => esc_html__( 'Vertical call to action.', 'bjork' ),
			'categories'    => array( 'bjork-cta' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'cta/cta-vertical' ),
		),

		/* FOOTER */

		'bjork/footer-horizontal' => array(
			'title'         => esc_html__( 'Footer with site title, theme credit and social icons. This is the default footer in the theme.', 'bjork' ),
			'categories'    => array( 'bjork-footer' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'footer/footer-horizontal' ),
		),
		'bjork/footer-horizontal-full' => array(
			'title'         => esc_html__( 'The default footer in full width with a background color.', 'bjork' ),
			'categories'    => array( 'bjork-footer' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'footer/footer-horizontal-full' ),
		),
		'bjork/footer-cta' => array(
			'title'         => esc_html__( 'Full width footer with a call to action, site title, theme credit, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'footer/footer-cta' ),
		),
		'bjork/footer-contact-cta' => array(
			'title'         => esc_html__( 'Full width footer with contact details, call to action, site title, theme credit, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'footer/footer-contact-cta' ),
		),
		'bjork/footer-contact' => array(
			'title'         => esc_html__( 'Full width footer with contact details, site title, theme credit, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'footer/footer-contact' ),
		),

		/* GENERAL */

		'bjork/general-faq' => array(
			'title'         => esc_html__( 'Frequently Asked Questions (FAQ) section.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-faq' ),
		),
		'bjork/general-follow-us-vertical' => array(
			'title'         => esc_html__( 'Follow us section with a vertical layout.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['content'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-follow-us-vertical' ),
		),
		'bjork/general-follow-us-horizontal' => array(
			'title'         => esc_html__( 'Follow us section with a horizontal layout.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-follow-us-horizontal' ),
		),
		'bjork/general-information-banner' => array(
			'title'         => esc_html__( 'Information banner.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-information-banner' ),
		),
		'bjork/general-previews-featured' => array(
			'title'         => esc_html__( 'Large featured section for the latest sticky post on the site.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-previews-featured' ),
		),
		'bjork/general-previews-columns' => array(
			'title'         => esc_html__( 'Latest news section with three posts.', 'bjork' ),
			'categories'    => array( 'bjork-general', 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-previews-columns' ),
		),
		'bjork/general-previews-columns-small' => array(
			'title'         => esc_html__( 'Compact latest news section with three posts.', 'bjork' ),
			'categories'    => array( 'bjork-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-previews-columns-small' ),
		),
		'bjork/general-testimonial-large' => array(
			'title'         => esc_html__( 'Large testimonial with a single quote.', 'bjork' ),
			'categories'    => array( 'bjork-general', 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-testimonial-large' ),
		),
		'bjork/general-testimonials-columns' => array(
			'title'         => esc_html__( 'Testimonials section with three quotes.', 'bjork' ),
			'categories'    => array( 'bjork-general', 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'general/general-testimonials-columns' ),
		),

		/* HEADER */

		'bjork/header-horizontal' => array(
			'title'         => esc_html__( 'Header with site title and menu. This is the default header in the theme.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-horizontal' ),
		),
		'bjork/header-horizontal-bg' => array(
			'title'         => esc_html__( 'The default header with a background color.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-horizontal-bg' ),
		),
		'bjork/header-horizontal-stacked' => array(
			'title'         => esc_html__( 'Header with site title and menu, stacked on all screen sizes.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-horizontal-stacked' ),
		),
		'bjork/header-horizontal-button' => array(
			'title'         => esc_html__( 'Header with site title, menu, and a button.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-horizontal-button' ),
		),
		'bjork/header-horizontal-social' => array(
			'title'         => esc_html__( 'Header with site title, menu, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-horizontal-social' ),
		),
		'bjork/header-gigantic-title' => array(
			'title'         => esc_html__( 'Header with a gigantic site title, menu, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-gigantic-title' ),
		),
		'bjork/header-gigantic-title-bg' => array(
			'title'         => esc_html__( 'Header with background color and a gigantic site title, menu, and social icons.', 'bjork' ),
			'categories'    => array( 'bjork-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'header/header-gigantic-title-bg' ),
		),

		/* HERO */

		'bjork/hero-cover' => array(
			'title'         => esc_html__( 'Hero with a background image, a heading and buttons.', 'bjork' ),
			'categories'    => array( 'bjork-hero' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'hero/hero-cover' ),
		),
		'bjork/hero-cover-group-bg' => array(
			'title'         => esc_html__( 'Hero with a background image and a heading, paragraph of text, and buttons.', 'bjork' ),
			'categories'    => array( 'bjork-hero' ),
			'viewportWidth' => $viewport['full'],
			'content'       => bjork_get_block_pattern_markup( 'hero/hero-cover-group-bg' ),
		),

		/* PORTFOLIO */

		'bjork/portfolio-about-section' => array(
			'title'         => esc_html__( 'An about section with heading, paragraph and call to action links.', 'bjork' ),
			'categories'    => array( 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'portfolio/portfolio-about-section' ),
		),
		'bjork/portfolio-filtration' => array(
			'title'         => esc_html__( 'Portfolio filtration formatted as a row of buttons.', 'bjork' ),
			'categories'    => array( 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'portfolio/portfolio-filtration' ),
		),
		'bjork/portfolio-features' => array(
			'title'         => esc_html__( 'Features grid with a title and description.', 'bjork' ),
			'categories'    => array( 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'portfolio/portfolio-features' ),
		),
		'bjork/portfolio-logo-grid' => array(
			'title'         => esc_html__( 'Logo grid with a title and description.', 'bjork' ),
			'categories'    => array( 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'portfolio/portfolio-logo-grid' ),
		),
		'bjork/portfolio-process' => array(
			'title'         => esc_html__( 'Work process description with multiple steps.', 'bjork' ),
			'categories'    => array( 'bjork-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => bjork_get_block_pattern_markup( 'portfolio/portfolio-process' ),
		),

	) );

	// Register block patterns.
	foreach ( $bjork_block_patterns as $slug => $settings ) {
		register_block_pattern( $slug, $settings );
	}

}
// add_action( 'init', 'bjork_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	GET BLOCK PATTERN MARKUP
	Returns the markup of the block pattern at the specified theme path.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'bjork_get_block_pattern_markup' ) ) : 
	function bjork_get_block_pattern_markup( $pattern_name ) {

		$path = 'inc/block-patterns/' . $pattern_name . '.php';

		if ( ! locate_template( $path ) ) return;

		ob_start();
		include( locate_template( $path ) );
		return ob_get_clean();

	}
endif;
