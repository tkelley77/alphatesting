<?php
/**
 * Title: 404
 * Slug: kanoa/404
 * Categories: kanoa-patterns
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-tiny-font-size"
    style="letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'ノ ◕ ヮ◕ノ ✧', 'kanoa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Some paths end without a destination.', 'kanoa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'The page may have moved—or simply chosen not to be here.', 'kanoa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="/"><?php esc_html_e( 'Go to the main page →', 'kanoa' ); ?></a></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
