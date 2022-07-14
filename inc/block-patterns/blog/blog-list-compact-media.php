<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:separator {"backgroundColor":"quaternary","className":"alignwide is-style-wide"} -->
		<hr
			class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background alignwide is-style-wide" />
		<!-- /wp:separator -->
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"100px","layout":{"contentSize":""}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px">
				<!-- wp:post-featured-image {"width":"100px","height":"100px"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"0.5em"}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center">
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:post-date {"textAlign":"left","isLink":true,"textColor":"secondary","fontSize":"large"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"64px"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group" style="padding-top:64px">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
				<hr
					class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
				<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em">
					<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"heading-6"} /-->

					<!-- wp:query-pagination-next {"fontSize":"heading-6"} /-->
					<!-- /wp:query-pagination -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
				<hr
					class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" />
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->