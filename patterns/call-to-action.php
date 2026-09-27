<?php
/**
 * Title: Call to action
 * Slug: twentythree-theme/call-to-action
 * Categories: twentythree-sections, call-to-action
 * Description: A high-contrast closing section with concise copy and a single action.
 * Keywords: call to action, contact, conversion
 * Inserter: true
 */
?>
<!-- wp:group {"templateLock":"contentOnly","align":"wide","backgroundColor":"accent-dark","textColor":"canvas","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-canvas-color has-accent-dark-background-color has-text-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"42rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Ready to take the next step?', 'twentythree' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Give visitors one clear reason to get in touch or continue their journey.', 'twentythree' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"canvas","textColor":"accent-dark"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-dark-color has-canvas-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get in touch', 'twentythree' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
