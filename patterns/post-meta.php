<?php
/**
 * Title: Post Meta
 * Slug: janboddez/post-meta
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: ","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"tertiary","fontFamily":"merriweather"} /-->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"tertiary","className":"post-meta","fontSize":"small"} -->
<div class="wp-block-columns is-not-stacked-on-mobile post-meta has-tertiary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true} /-->

<!-- wp:paragraph {"className":"screen-reader-text"} -->
<p class="screen-reader-text"><?php echo esc_html_x( 'by', 'Preposition to show the relationship between the post and its author', 'janboddez' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":true,"isLink":true,"className":"screen-reader-text"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:indieblocks/location {"includeWeather":true,"className":"aligncenter"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:indieblocks/syndication {"className":"alignright"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:indieblocks/link-preview {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"border":{"radius":"5px","color":"#cccccc","width":"1px"}}} /--></div>
<!-- /wp:group -->
