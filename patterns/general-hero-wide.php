<?php
/**
 * Title: Wide hero with headings and buttons.
 * Slug: bjork/general-hero-wide
 * Categories: bjork-general
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5vh","top":"0vh"}}},"textColor":"foreground"} -->
<div class="wp-block-group alignwide has-foreground-color has-text-color" style="padding-top:0vh;padding-bottom:5vh">
	<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px"}}},"textColor":"secondary","fontSize":"extra-large"} -->
	<h1 class="has-secondary-color has-text-color has-extra-large-font-size" style="margin-top:0px">Hi there!</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":1} -->
	<h1>I’m Björk, and I’m a writer and podcaster. This is my little corner on the web.</h1>
	<!-- /wp:heading -->

	<!-- wp:buttons {"style":{"spacing":{"blockGap":"1em"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"color":{}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link">Get In Touch</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color">About Me</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->