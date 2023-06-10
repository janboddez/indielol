<?php
/**
 * Title: Hidden 404
 * Slug: janboddez/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'janboddez' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontFamily":"merriweather"} -->
<p class="has-merriweather-font-family"><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'janboddez' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'janboddez' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'janboddez' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'janboddez' ); ?>","buttonUseIcon":true,"align":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
