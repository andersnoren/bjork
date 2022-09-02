<?php
/**
 * Title: Testimonials section.
 * Slug: bjork/general-testimonials
 * Categories: bjork-general
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"backgroundColor":"foreground"} -->
	<div class="wp-block-column has-foreground-background-color has-background">
		<!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"blockGap":"2.5rem","padding":{"top":"2.5em","bottom":"2.5em"}}},"backgroundColor":"foreground","textColor":"background"} -->
		<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background"
			style="border-radius:0px;padding-top:2.5em;padding-bottom:2.5em">
			<!-- wp:image {"align":"center","width":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded">
				<figure class="aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/avatar.png"
						alt="" width="100" /></figure>
			</div>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">“Poe guided us through the rebranding with a steady hand and a keen eye for
				detail.”</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:separator {"backgroundColor":"secondary","className":"is-style-bjork-angled-separator"} -->
				<hr
					class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-bjork-angled-separator" />
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
			<h3 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400">
				<strong>H.P. Lovecraft<br></strong>Author</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"backgroundColor":"foreground"} -->
	<div class="wp-block-column has-foreground-background-color has-background">
		<!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"blockGap":"2.5rem","padding":{"top":"2.5em","bottom":"2.5em"}}},"backgroundColor":"foreground","textColor":"background"} -->
		<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background"
			style="border-radius:0px;padding-top:2.5em;padding-bottom:2.5em">
			<!-- wp:image {"align":"center","width":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded">
				<figure class="aligncenter size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/avatar.png"
						alt="" width="100" /></figure>
			</div>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">“Poe helped breath new life into our business with the launch of our online
				shop.”</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:separator {"backgroundColor":"secondary","className":"is-style-bjork-angled-separator"} -->
				<hr
					class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-bjork-angled-separator" />
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
			<h3 class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:400">
				<strong>Mary Shelley<br></strong>Author</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->