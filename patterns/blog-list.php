<?php
/**
 * Title: Blog post list with featured image, post date, and title.
 * Slug: bjork/blog-list
 * Categories: bjork-blog
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"9","pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":1}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px">
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

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"8vh"}}}} -->
	<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:8vh">
		<!-- wp:query-pagination {"paginationArrow":"arrow","textColor":"primary","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->

		<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->

		<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->