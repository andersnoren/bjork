<?php
/**
 * Title: Blog posts shown as excerpts.
 * Slug: bjork/blog-excerpt
 * Categories: bjork-blog
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"blockGap":".25em"}},"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"heading-5"} /-->

		<!-- wp:post-title {"textAlign":"left","level":1,"isLink":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"64px"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"32px"}}} -->
	<div class="wp-block-group">
		<!-- wp:post-content {"layout":{"inherit":true}} /-->

		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"textColor":"primary","spacing":{"blockGap":"0.5em"}},"textColor":"secondary","className":"has-primary-color has-text-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap"},"fontSize":"small"} -->
			<div
				class="wp-block-group has-primary-color has-text-color has-secondary-color has-small-font-size">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p>In</p>
					<!-- /wp:paragraph -->

					<!-- wp:post-terms {"term":"category"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"5vh","bottom":"5vh"}}}} -->
	<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:5vh;padding-bottom:5vh">
		<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-bjork-angled-separator-wide"} -->
		<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-bjork-angled-separator-wide"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->

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