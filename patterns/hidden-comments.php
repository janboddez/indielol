<?php
/**
 * Title: Hidden Comments
 * Slug: indielol/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:indieblocks/facepile {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-indieblocks-facepile" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
		<h2 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Likes, Bookmarks, and Reposts', 'Title of the likes, bookmarks, and reposts "facepile"', 'indielol' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:indieblocks/facepile-content {"avatarSize":3,"icons":true,"backgroundColor":"#fff"} /-->
	</div>
	<!-- /wp:indieblocks/facepile -->

	<!-- wp:comments -->
	<div class="wp-block-comments">
		<!-- wp:comments-title {"fontSize":"large"} /-->

		<!-- wp:comment-template -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:column {"width":"48px"} -->
				<div class="wp-block-column" style="flex-basis:48px">
					<!-- wp:avatar {"size":48,"isLink":true,"style":{"border":{"radius":"50%"},"spacing":{"margin":{"top":"0.25rem"}}}} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:comment-author-name {"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
					<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
						<!-- wp:comment-date /-->

						<!-- wp:comment-edit-link /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content /-->

					<!-- wp:comment-reply-link /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->

			<!-- wp:comments-pagination-numbers /-->

			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
