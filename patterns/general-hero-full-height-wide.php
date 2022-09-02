<?php
/**
 * Title: Wide and full height hero with headings and buttons.
 * Slug: bjork/general-hero-full-height
 * Categories: bjork-general
 */
?>
<!-- wp:cover {"dimRatio":0,"overlayColor":"quaternary","minHeight":90,"minHeightUnit":"vh","isDark":false,"align":"wide","style":{"spacing":{"padding":{"top":"0vh","right":"0vh","bottom":"0vh","left":"0vh"}}}} -->
<div class="wp-block-cover alignwide is-light"
	style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh;min-height:90vh"><span
		aria-hidden="true"
		class="wp-block-cover__background has-quaternary-background-color has-background-dim-0 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0vh","top":"0vh"},"blockGap":"2rem"}},"textColor":"foreground"} -->
		<div class="wp-block-group alignwide has-foreground-color has-text-color" style="padding-top:0vh;padding-bottom:0vh">
			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px"}}},"textColor":"secondary","fontSize":"extra-large"} -->
			<h1 class="has-secondary-color has-text-color has-extra-large-font-size" style="margin-top:0px">Hi there!
			</h1>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":1} -->
			<h1>My name is Björk, and I am a podcaster and writer. This is my little corner on the web.</h1>
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
	</div>
</div>
<!-- /wp:cover -->