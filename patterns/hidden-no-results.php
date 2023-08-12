<?php
/**
 * Title: Hidden No Results Content
 * Slug: indielol/hidden-no-results-content
 * Inserter: no
 */
?>

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'indielol' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'indielol' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'indielol' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'indielol' ); ?>","buttonUseIcon":true,"style":{"border":{"radius":"4px","width":"1px"}},"borderColor":"tertiary"} /-->
