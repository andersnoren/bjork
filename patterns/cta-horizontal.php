<?php
/**
 * Title: Horizontal call to action.
 * Slug: bjork/cta-horizontal
 * Categories: bjork-cta
 */
?>
<!-- wp:group {"align":"wide","style":{"border":{"radius":"8px"}},"backgroundColor":"primary","textColor":"background"} -->
<div class="wp-block-group alignwide has-background-color has-primary-background-color has-text-color has-background"
	style="border-radius:8px">
	<!-- wp:columns {"className":"is-style-default"} -->
	<div class="wp-block-columns is-style-default">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"textAlign":"left","level":3} -->
			<h3 class="has-text-align-left">Work With Us!</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"foreground","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a
						class="wp-block-button__link has-foreground-background-color has-background">Send us an
						email</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->