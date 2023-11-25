<?php
/**
 * Title: Post Meta
 * Slug: indielol/post-meta
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"},"fontSize":"small","textColor":"tertiary"} -->
	<div class="wp-block-group has-text-color has-tertiary-color has-small-font-size">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:post-date {"isLink":true} /-->

			<!-- wp:post-author {"isLink":true,"className":"screen-reader-text"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-terms {"term":"post_tag","prefix":"<?php esc_html_e( 'Tagged: ', 'indielol' ); ?>","textColor":"tertiary"} /-->

		<!-- wp:indieblocks/location {"includeWeather":true} /-->

		<!-- wp:indieblocks/syndication /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:indieblocks/link-preview {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"border":{"radius":"5px","color":"#cccccc","width":"1px"}},"fontFamily":"inter","fontSize":"medium"} /--></div>
<!-- /wp:group -->
