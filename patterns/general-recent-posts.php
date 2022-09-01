<?php
/**
 * Title: Section with recent posts displayed horizontally.
 * Slug: bjork/general-recent-posts
 * Categories: bjork-general
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3em","bottom":"0em"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:3em;margin-bottom:0em">
	<!-- wp:heading {"fontSize":"extra-large"} -->
	<h2 class="has-extra-large-font-size">Recent Posts</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:post-featured-image {"isLink":true} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
					<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} /-->

					<!-- wp:post-title {"isLink":true,"fontSize":"heading-5"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->