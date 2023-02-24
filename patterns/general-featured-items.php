<?php
/**
 * Title: Featured items with a image, heading, paragraph and button.
 * Slug: bjork/general-featured-items
 * Categories: bjork-general
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"backgroundColor":"quaternary","textColor":"foreground"} -->
	<div class="wp-block-column has-foreground-color has-quaternary-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image has-custom-border"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/feature-1.png"
				alt=""
				style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" />
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"1.5rem"}},"backgroundColor":"quaternary"} -->
		<div class="wp-block-group has-quaternary-background-color has-background"
			style="margin-top:0px;margin-bottom:0px">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"lineHeight":"1"}}} -->
			<h6 class="has-text-align-left" id="my-story" style="line-height:1">My Story</h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
			<p class="has-text-align-left has-small-font-size">Learn how I became an artist, and how I developed this
				particular style.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"foreground","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a
						class="wp-block-button__link has-foreground-background-color has-background" href="#">Read
						More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"backgroundColor":"quaternary","textColor":"foreground"} -->
	<div class="wp-block-column has-foreground-color has-quaternary-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image has-custom-border"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/feature-2.png"
				alt=""
				style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" />
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary"} -->
		<div class="wp-block-group has-quaternary-background-color has-background"
			style="margin-top:0px;margin-bottom:0px">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"lineHeight":"1"}}} -->
			<h6 class="has-text-align-left" id="my-story" style="line-height:1">Reach Out</h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
			<p class="has-text-align-left has-small-font-size">Want to show my art in your gallery? Send me an email and
				we'll chat.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"foreground","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a
						class="wp-block-button__link has-foreground-background-color has-background" href="#">Contact
						Me</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"backgroundColor":"quaternary","textColor":"foreground"} -->
	<div class="wp-block-column has-foreground-color has-quaternary-background-color has-text-color has-background">
		<!-- wp:image {"linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image has-custom-border"><img
				src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/feature-3.png"
				alt=""
				style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" />
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary"} -->
		<div class="wp-block-group has-quaternary-background-color has-background"
			style="margin-top:0px;margin-bottom:0px">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"lineHeight":"1"}}} -->
			<h6 class="has-text-align-left" id="my-story" style="line-height:1">Get Social</h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
			<p class="has-text-align-left has-small-font-size">Love my work? Follow me online to see new paintings
				first.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"foreground","fontSize":"tiny"} -->
				<div class="wp-block-button has-custom-font-size has-tiny-font-size"><a
						class="wp-block-button__link has-foreground-background-color has-background" href="#">Follow
						Me</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->