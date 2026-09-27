<?php
/**
 * Title: Hero
 * Slug: twentythree-theme/hero
 * Categories: twentythree-sections, featured
 * Description: A focused introductory section with a heading, supporting copy, and primary action.
 * Keywords: hero, introduction, banner
 * Inserter: true
 */
?>
<!-- wp:group {"templateLock":"contentOnly","align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"52rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"display"} -->
<h2 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'A clear promise for your customer', 'twentythree' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Explain what you offer, who it helps, and why it matters in one concise paragraph.', 'twentythree' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Primary action', 'twentythree' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
