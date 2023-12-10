<?php
/**
 * Title: Hidden 404
 * Slug: indielol/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'indielol' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'indielol' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'indielol' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'indielol' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'indielol' ); ?>","buttonUseIcon":true,"style":{"border":{"radius":"4px","width":"1px"}},"borderColor":"tertiary"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
